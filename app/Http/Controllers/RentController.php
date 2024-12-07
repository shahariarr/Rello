<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Rent::where('user_id', Auth::id())->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex">';
                    $btn .= '<a href="'.route("rents.edit",$row['id']).'" class="btn btn-primary btn-sm mr-2"><i class="bi bi-pencil-square"></i> Edit</a>';
                    $btn .= '<form action="'.route("rents.destroy",$row['id']).'" method="POST">
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

        return view('rents.index');
    }

    public function create()
    {
        return view('rents.create');
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

        return redirect()->route('rents.index')->with('success', 'Rent created successfully.');
    }

    public function edit(Rent $rent)
    {
        return view('rents.edit', compact('rent'));
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

        return redirect()->route('rents.index')->with('success', 'Rent updated successfully.');
    }

    public function destroy(Rent $rent)
    {
        $rent->delete();

        return redirect()->route('rents.index')->with('success', 'Rent deleted successfully.');
    }
}
