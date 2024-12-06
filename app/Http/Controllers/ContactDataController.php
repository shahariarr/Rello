<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ContactData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactDataController extends Controller
{
    public function edit()
    {
        try {
            $contactData = ContactData::where('user_id', auth()->id())->first();

            if (!$contactData) {
                return redirect()->route('contactdata.create');
            }

            return view('contactdata.edit', compact('contactData'));
        } catch (Exception $e) {
            return redirect()->route('contactdata.create')->with('error', 'An error occurred while retrieving your contact data.');
        }
    }

    public function create()
    {
        try {
            $contactData = ContactData::where('user_id', auth()->id())->first();

            if ($contactData !== null) {
                return redirect()->route('contactdata.edit')->with('error', 'Contact data already exists. You can only edit it.');
            }

            return view('contactdata.create');
        } catch (Exception $e) {
            return redirect()->route('contactdata.edit')->with('error', 'An error occurred while creating your contact data.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'about' => 'required|string',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',
                'linkedin' => 'nullable|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'map' => 'nullable|string',
                'twitter' => 'nullable|string|max:255',
                'instagram' => 'nullable|string|max:255',
                'youtube' => 'nullable|string|max:255',
            ]);

            $user = Auth::user();

            $contactData = ContactData::where('user_id', auth()->id())->first();

            if ($contactData !== null) {
                return redirect()->route('contactdata.edit')->with('error', 'Contact data already exists. You can only edit it.');
            }

            $contactData = new ContactData();
            $contactData->user_id = $user->id;
            $contactData->title = $request->title;
            $contactData->about = $request->about;
            $contactData->phone = $request->phone;
            $contactData->email = $request->email;
            $contactData->address = $request->address;
            $contactData->linkedin = $request->linkedin;
            $contactData->facebook = $request->facebook;
            $contactData->map = $request->map;
            $contactData->twitter = $request->twitter;
            $contactData->instagram = $request->instagram;
            $contactData->youtube = $request->youtube;

            $contactData->save();

            return redirect()->route('contactdata.edit')->with('success', 'Contact data created successfully.');
        } catch (Exception $e) {
            return redirect()->route('contactdata.create')->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'about' => 'required|string',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',
                'linkedin' => 'nullable|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'map' => 'nullable|string',
                'twitter' => 'nullable|string|max:255',
                'instagram' => 'nullable|string|max:255',
                'youtube' => 'nullable|string|max:255',
            ]);

            $contactData = ContactData::where('user_id', auth()->id())->first();

            if (!$contactData) {
                return redirect()->route('contactdata.create')->with('error', 'Contact data does not exist. Please create one first.');
            }

            $contactData->title = $request->title;
            $contactData->about = $request->about;
            $contactData->phone = $request->phone;
            $contactData->email = $request->email;
            $contactData->address = $request->address;
            $contactData->linkedin = $request->linkedin;
            $contactData->facebook = $request->facebook;
            $contactData->map = $request->map;
            $contactData->twitter = $request->twitter;
            $contactData->instagram = $request->instagram;
            $contactData->youtube = $request->youtube;

            $contactData->save();

            return redirect()->route('contactdata.edit')->with('success', 'Contact data updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('contactdata.edit')->with('error', $e->getMessage());
        }
    }
}
