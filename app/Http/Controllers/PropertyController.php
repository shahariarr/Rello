<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use DataTables;

class PropertyController extends Controller
{
    public function index(Request $request)
{

    if ($request->ajax()) {
    $data =  Property::all();

    return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){

                $btn = '<div class="d-flex">';
                $btn .= '<a href="'.route("properties.edit",$row['id']).'" class="btn btn-primary btn-sm mr-2"><i class="bi bi-pencil-square"></i> Edit</a>';
                $btn .= '<form action="'.route("properties.destroy",$row['id']).'" method="POST">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm mr-2"><i class="bi bi-trash"></i> Delete</button>
                </form>';
                $btn .= '</div>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
}

return view('properties.index');
}



    public function create()
    {
        return view('properties.create');
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
            // 'agent_name' => 'required',
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

        Property::create($data);

        return redirect()->route('properties.index')->with('success', 'Property created successfully.');
    }

    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
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
            // 'agent_name' => 'required',
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

        return redirect()->route('properties.index')->with('success', 'Property updated successfully.');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('properties.index')->with('success', 'Property deleted successfully.');
    }
}
