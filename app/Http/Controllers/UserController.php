<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class UserController extends Controller
{


    // Handle registration and referral logic
    public function register(Request $request)
    {
        // Validate user input
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'referral_name' => 'nullable|string|max:255',  // Optional referral field
        ]);

        // If validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Check if referral exists
        $referralUser = null;
        if ($request->referral_name) {
            $referralUser = User::where('username', $request->referral_name)->first();
            if (!$referralUser) {
                return redirect()->back()->with('error', 'Referral username does not exist.');
            }
        }

        // Create new user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referral_name' => $referralUser ? $referralUser->username : null,
            'referred_balance' => $referralUser ? 10.00 : 0.00,  // Give referral bonus if there's a referrer
        ]);

        // If the user has a referrer, increase the referrer's balance
        if ($referralUser) {
            $referralUser->balance += $user->referred_balance;
            $referralUser->save();
        }

        // Send Welcome Notification
        Notification::welcome($user->id, $user->username);

        // Log the user in
        auth()->login($user);

        // Redirect to home page
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Handle the login logic
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',  // Validates the email
            'password' => 'required|min:6', // Validates the password
            'g-recaptcha-response' => 'required',
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Authentication passed
            return redirect()->intended('/'); // Redirect to intended page or dashboard
        } else {
            // Authentication failed
            return redirect()->route('login')->withErrors(['email' => 'Invalid credentials. Please try again.']);
        }
    }

    public function showOrders()
    {
        $orders = Order::where('user_id', auth()->id())->get(); // Fetch orders of the logged-in user
        return view('orders', compact('orders'));
    }

    public function showNotifications()
    {
        $notifications = Notification::where('user_id', auth()->id())->latest()->get();
        return view('notifications', compact('notifications'));
    }
}
