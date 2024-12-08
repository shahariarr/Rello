<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRentController extends Controller
{
    public function index(Request $request)
    {
        $properties = Rent::where('user_id', Auth::id())->get();
        return view('frontend.partials.user_rent_index', compact('properties'));
    }

    public function create()
    {
        return view('frontend.partials.user_rent_create');
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

        Rent::create($data);

        return redirect()->route('user.rents.index')->with('success', 'Rent created successfully.');
    }

    public function edit(Rent $rent)
    {
        return view('frontend.partials.user_rent_edit', compact('rent'));
    }

    public function update(Request $request, Rent $rent)
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

        $rent->update($data);

        return redirect()->route('user.rents.index')->with('success', 'Rent updated successfully.');
    }

    public function destroy(Rent $rent)
    {
        $rent->delete();

        return redirect()->route('user.rents.index')->with('success', 'Rent deleted successfully.');
    }
}
