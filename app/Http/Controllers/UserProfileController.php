<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function edit()
    {
        try {
            $userProfile = UserProfile::where('user_id', auth()->id())->first();

            if (!$userProfile) {
                return redirect()->route('user_profiles.create');
            }

            return view('user_profiles.edit', compact('userProfile'));
        } catch (Exception $e) {
            return redirect()->route('user_profiles.create')->with('error', 'An error occurred while retrieving the user profile.');
        }
    }

    public function create()
    {
        try {
            $userProfile = UserProfile::where('user_id', auth()->id())->first();

            if ($userProfile !== null) {
                return redirect()->route('user_profiles.edit')->with('error', 'User profile already exists. You can only edit it.');
            }

            return view('user_profiles.create');
        } catch (Exception $e) {
            return redirect()->route('user_profiles.edit')->with('error', 'An error occurred while creating the user profile.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'user_name' => 'required|string|max:255|unique:user_profiles',
                'email' => 'required|string|email|max:255|unique:user_profiles',
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string|max:255',
                'biography' => 'nullable|string',
                'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $user = Auth::user();

            $userProfile = new UserProfile();
            $userProfile->user_id = $user->id;
            $userProfile->first_name = $request->first_name;
            $userProfile->last_name = $request->last_name;
            $userProfile->user_name = $request->user_name;
            $userProfile->email = $request->email;
            $userProfile->phone = $request->phone;
            $userProfile->address = $request->address;
            $userProfile->biography = $request->biography;

            if ($request->hasFile('profile_img')) {
                $userProfile->profile_img = $request->file('profile_img')->store('profile_images', 'public');
            }

            $userProfile->save();

            return redirect()->route('user_profiles.edit')->with('success', 'User profile created successfully.');
        } catch (Exception $e) {
            return redirect()->route('user_profiles.create')->with('error', $e->getMessage());
        }
    }



    public function update(Request $request)
    {

        try {
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'user_name' => 'required|string|max:255|unique:user_profiles,user_name,' . auth()->id(),
                'email' => 'required|string|email|max:255|unique:user_profiles,email,' . auth()->id(),
                'phone' => 'nullable|string|max:20',
                'address' => 'nullable|string|max:255',
                'biography' => 'nullable|string',
                'profile_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $userProfile = UserProfile::where('user_id', auth()->id())->first();

            if (!$userProfile) {
                return redirect()->route('user_profiles.create')->with('error', 'User profile does not exist. Please create one first.');
            }

            $userProfile->first_name = $request->first_name;
            $userProfile->last_name = $request->last_name;
            $userProfile->user_name = $request->user_name;
            $userProfile->email = $request->email;
            $userProfile->phone = $request->phone;
            $userProfile->address = $request->address;
            $userProfile->biography = $request->biography;

            if ($request->hasFile('profile_img')) {
                if ($userProfile->profile_img) {
                    Storage::disk('public')->delete($userProfile->profile_img);
                }
                $userProfile->profile_img = $request->file('profile_img')->store('profile_images', 'public');
            }

            $userProfile->save();

            return redirect()->route('user_profiles.edit')->with('success', 'User profile updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('user_profiles.edit')->with('error', $e->getMessage());
        }
    }
}
