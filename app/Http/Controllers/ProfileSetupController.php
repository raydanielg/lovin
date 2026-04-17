<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\District;
use App\Models\UserProfile;

class ProfileSetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();
        $profile = $user->profile ?? $user->profile()->create();

        if ($profile->is_complete) {
            return redirect()->route('home');
        }

        $regions = Region::orderBy('order')->get();

        return view('profile.setup', compact('profile', 'regions'));
    }

    public function storeBasic(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string|max:20',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female,other',
        ]);

        $user = auth()->user();
        $profile = $user->profile;

        if (!$profile) {
            $profile = $user->profile()->create();
        }

        $profile->update([
            'phone_number' => $request->phone_number,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'profile_step' => 'region',
        ]);

        return redirect()->route('profile.setup');
    }

    public function storeRegion(Request $request)
    {
        $request->validate([
            'region_id' => 'required|exists:regions,id',
            'district_id' => 'required|exists:districts,id',
        ]);

        $user = auth()->user();
        $profile = $user->profile;

        $profile->update([
            'region_id' => $request->region_id,
            'district_id' => $request->district_id,
            'profile_step' => 'complete',
            'is_complete' => true,
        ]);

        // Redirect based on user role
        $user = auth()->user();
        if ($user->isManager()) {
            return redirect('/manager/dashboard')->with('success', 'Profile setup complete! Welcome to Manager Dashboard.');
        }
        if ($user->isAdmin() || $user->isSuperAdmin()) {
            return redirect('/admin/dashboard')->with('success', 'Profile setup complete!');
        }

        return redirect()->route('home')->with('success', 'Profile setup complete!');
    }

    public function getDistricts(Region $region)
    {
        $districts = $region->districts()->orderBy('name')->get(['id', 'name']);
        return response()->json($districts);
    }
}
