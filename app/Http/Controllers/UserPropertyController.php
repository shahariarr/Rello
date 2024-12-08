<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPropertyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $properties = Property::where('user_id', Auth::id())->get();
        return view('frontend.partials.user_properties_index', compact('properties'));
    }

    public function create()
    {
        return view('frontend.partials.user_properties_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'required|integer',
            'agent_phone' => 'required',
            'description' => 'required',
            'agent_image' => 'image|nullable',
            'background_image' => 'image|nullable',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('agent_image')) {
            $data['agent_image'] = $request->file('agent_image')->store('uploads', 'public');
        }

        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')->store('uploads', 'public');
        }

        Property::create($data);

        return redirect()->route('user.properties.index')->with('success', 'Property created successfully.');
    }

    public function edit(Property $property)
    {
        return view('frontend.partials.user_properties_edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'location' => 'required',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'size' => 'required|integer',
            'agent_phone' => 'required',
            'description' => 'required',
            'agent_image' => 'image|nullable',
            'background_image' => 'image|nullable',
        ]);

        $data = $request->all();

        if ($request->hasFile('agent_image')) {
            $data['agent_image'] = $request->file('agent_image')->store('uploads', 'public');
        }

        if ($request->hasFile('background_image')) {
            $data['background_image'] = $request->file('background_image')->store('uploads', 'public');
        }

        $property->update($data);

        return redirect()->route('user.properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('user.properties.index')->with('success', 'Property deleted successfully.');
    }
}
