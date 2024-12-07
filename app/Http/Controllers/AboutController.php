<?php
namespace App\Http\Controllers;

use Exception;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function edit()
    {
        try {
            $about = About::where('user_id', auth()->id())->first();

            if (!$about) {
                return redirect()->route('about.create');
            }

            return view('about.edit', compact('about'));
        } catch (Exception $e) {
            return redirect()->route('about.create')->with('error', 'An error occurred while retrieving the about section.');
        }
    }

    public function create()
    {
        try {
            $about = About::where('user_id', auth()->id())->first();

            if ($about !== null) {
                return redirect()->route('about.edit')->with('error', 'About section already exists. You can only edit it.');
            }

            return view('about.create');
        } catch (Exception $e) {
            return redirect()->route('about.edit')->with('error', 'An error occurred while creating the about section.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'vision' => 'required|string',
                'mission' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $user = Auth::user();

            $about = new About();
            $about->user_id = $user->id;
            $about->title = $request->title;
            $about->description = $request->description;
            $about->vision = $request->vision;
            $about->mission = $request->mission;

            if ($request->hasFile('image')) {
                $about->image = $request->file('image')->store('about_images', 'public');
            }

            $about->save();

            return redirect()->route('about.edit')->with('success', 'About section created successfully.');
        } catch (Exception $e) {
            return redirect()->route('about.create')->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'vision' => 'required|string',
                'mission' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            ]);

            $about = About::where('user_id', auth()->id())->first();

            if (!$about) {
                return redirect()->route('about.create')->with('error', 'About section does not exist. Please create one first.');
            }

            $about->title = $request->title;
            $about->description = $request->description;
            $about->vision = $request->vision;
            $about->mission = $request->mission;

            if ($request->hasFile('image')) {
                if ($about->image) {
                    Storage::disk('public')->delete($about->image);
                }
                $about->image = $request->file('image')->store('about_images', 'public');
            }

            $about->save();

            return redirect()->route('about.edit')->with('success', 'About section updated successfully.');
        } catch (Exception $e) {
            return redirect()->route('about.edit')->with('error', $e->getMessage());
        }
    }
}
