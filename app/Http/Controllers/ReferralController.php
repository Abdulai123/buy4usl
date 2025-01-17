<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReferralRequest;
use App\Http\Requests\UpdateReferralRequest;
use App\Models\Referral;
use Illuminate\Http\Request;
use App\Models\User;


class ReferralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


public function updateReferralCode(Request $request)
    {
        // Validate the referral code (optional)
        $request->validate([
            'referral_name' => 'required|string|max:255',
        ]);

        // Update the referral code
        $user = auth()->user();  // Get the logged-in user
        $user->referral_name = $request->referral_name;
        $user->save();  // Save the updated referral code

        return back()->with('success', 'Referral code updated successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReferralRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Referral $referral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Referral $referral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReferralRequest $request, Referral $referral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Referral $referral)
    {
        //
    }
}
