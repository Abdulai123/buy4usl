<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Referral;
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



    
    public function register(Request $request)
    {
        $request->validate( [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'phone_number' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'referral_code' => 'nullable|string|max:255',  // Optional referral field
        ]);
    
        // Check if referral exists
        $referralUser = null;
        if ($request->referral_code) {
            $referralUser = User::where('referral_code', $request->referral_code)->first();
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
            'referral_code' => $request->username, // Use the generated referral name or the referrer's username
        ]);
    
        // If the user has a referrer, create a referral entry and update the balance
        if ($referralUser) {
            // Create a referral entry for the referrer
            Referral::create([
                'user_id' => $user->id,
                'referrer_id' => $referralUser->id,
            ]);
    
            // Notify the referrer
            Notification::newReferral($referralUser->id, $user->username);
        }
    
        // Send Welcome Notification to the new user
        Notification::welcome($user->id, $user->username);
    
        // Log the user in
        auth()->login($user);
    
        // Redirect to home page
        return redirect('/')->with('success', 'Registration successful!');
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
           // 'g-recaptcha-response' => 'required',
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

        Notification::where('user_id', auth()->id())
            ->where('is_read', false)
            ->update(['is_read' => true]);

        // Fetch the latest notifications
        $notifications = Notification::where('user_id', auth()->id())
            ->latest()
            ->get();

        // Return the notifications view with the data
        return view('notifications', compact('notifications'));
    }

    public function showReferrals()
    {

        // Fetch the latest notifications
        $referrals = Referral::where('referrer_id', auth()->id())
            ->latest()
            ->get();

        // Return the notifications view with the data
        return view('referral', compact('referrals'));
    }
}
