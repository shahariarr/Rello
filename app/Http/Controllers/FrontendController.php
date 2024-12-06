<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Property;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $banners = Banner::where('user_id', $user->id)->get();
        $services = Service::where('user_id', $user->id)->get();
        $propertiesForSale = Property::where('user_id', $user->id)->limit(8)->get();
        $propertiesForRent = Rent::where('user_id', $user->id)->limit(8)->get();

        return view('frontend.partials.main', compact('banners', 'services', 'propertiesForSale', 'propertiesForRent'));
    }
}
