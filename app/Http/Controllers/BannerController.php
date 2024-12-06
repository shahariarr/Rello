<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function edit()
    {
        try {
            $banner = Banner::where('user_id', auth()->id())->first();

            if (!$banner) {
                return redirect()->route('banner.create');
            }

            return view('banners.edit', compact('banner'));
        } catch (Exception $e) {
            return redirect()->route('banner.create')->with('error', 'An error occurred while retrieving your banner.');
        }
    }

    public function create()
    {
        try {
            $banner = Banner::where('user_id', auth()->id())->first();

            if ($banner !== null) {
                return redirect()->route('banner.edit')->with('error', 'Banner already exists. You can only edit it.');
            }

            return view('banners.create');
        } catch (Exception $e) {
            return redirect()->route('banner.edit')->with('error', 'An error occurred while creating your banner.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'top_title' => 'required|string|max:255',
                'headline' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            $user = Auth::user();

            $banner = Banner::where('user_id', auth()->id())->first();

            if ($banner !== null) {
                return redirect()->route('banner.edit')->with('error', 'Banner already exists. You can only edit it.');
            }

            $banner = new Banner();
            $banner->user_id = $user->id;
            $banner->top_title = $request->top_title;
            $banner->headline = $request->headline;
            $banner->description = $request->description;

            $banner->save();

            return redirect()->route('banner.edit')->with('success', 'Banner created successfully.');
        } catch (Exception $e) {
            return redirect()->route('banner.create')->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'top_title' => 'required|string|max:255',
                'headline' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            $banner = Banner::where('user_id', auth()->id())->first();

            if (!$banner) {
                return redirect()->route('banner.create')->with('error', 'Banner does not exist. Please create one first.');
            }

            $banner->top_title = $request->top_title;
            $banner->headline = $request->headline;
            $banner->description = $request->description;

            $banner->save();

            return redirect()->route('banner.edit')->with('success', 'Banner updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('banner.edit')->with('error', $e->getMessage());
        }
    }
}
