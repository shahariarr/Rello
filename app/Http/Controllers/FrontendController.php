<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;
use App\Models\About;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Property;
use App\Models\ContactData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function index()
    {

        $banners = Banner::all();
        $services = Service::all();
        $propertiesForSale = Property::limit(8)->get();
        $propertiesForRent = Rent::limit(8)->get();

        return view('frontend.partials.main', compact('banners', 'services', 'propertiesForSale', 'propertiesForRent'));
    }

    public function listing_sale()
    {
        $user = Auth::user();

        $properties = Property::paginate(8);

        return view('frontend.partials.listing_sales', compact('properties'));
    }

    public function listing_rent()
    {
        $user = Auth::user();

        $propertiesForRent = Rent::paginate(8);

        return view('frontend.partials.listing_rent', compact('propertiesForRent'));
    }


    public function single_listing_sale($id)
    {
        $property = Property::findOrFail($id);
        return view('frontend.partials.single_listing_sale', compact('property'));
    }

    public function single_listing_rent($id)
    {
        $property = Rent::findOrFail($id);
        return view('frontend.partials.single_listing_rent', compact('property'));
    }

    public function contact()
    {
        $contactData = ContactData::first();
        return view('frontend.partials.contact', compact('contactData'));
    }

    public function about()
    {
        $about = About::first();
        $services = Service::all();

        return view('frontend.partials.about', compact('about', 'services'));
    }

    public function login()
    {

        return view('frontend.partials.login_reg');
    }

    public function login_req(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // If authentication is successful, redirect to the intended page
            return redirect()->route('user.dashboard')->with('success', 'You are logged in!');
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function registration_req(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->assignRole('user');
        // Save the user
        $user->save();

        // Log the user in
        Auth::login($user);

        // Redirect to the dashboard
        return redirect()->route('user.dashboard')->with('success', 'You are registered and logged in!');
    }

    public function user_dashboard()
    {
        return view('frontend.partials.user_dashboard');
    }







}
