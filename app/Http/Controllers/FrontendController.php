<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Property;
use App\Models\ContactData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $contactData = ContactData::where('user_id', auth()->id())->first();
        return view('frontend.partials.contact', compact('contactData'));
    }





}
