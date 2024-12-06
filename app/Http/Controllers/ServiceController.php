<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function create()
    {
        $service = Service::where('user_id', Auth::id())->first();
        if ($service) {
            return redirect()->route('service.edit')->with('error', 'Service details already exist. You can only edit them.');
        }

        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'services' => 'required|array',
            'services.*.name' => 'required|string|max:255',
            'services.*.description' => 'required|string',
            'services.*.image' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        foreach ($request->services as $serviceData) {
            $service = new Service();
            $service->user_id = Auth::id();
            $service->name = $serviceData['name'];
            $service->description = $serviceData['description'];

            if (isset($serviceData['image'])) {
                $imageName = time() . '.' . $serviceData['image']->extension();
                $serviceData['image']->move(public_path('service_images'), $imageName);
                $service->image = $imageName;
            }

            $service->save();
        }

        return redirect()->route('service.edit')->with('success', 'Service details added successfully');
    }

    public function edit()
    {
        $services = Service::where('user_id', Auth::id())->get();
        return view('services.edit', compact('services'));
    }

    public function update(Request $request)
    {
        $updatedIds = [];

        foreach ($request->services as $key => $serviceData) {
            if (strpos($key, 'new') !== false) {
                $newService = new Service();
                $newService->user_id = Auth::id();
                $newService->name = $serviceData['name'];
                $newService->description = $serviceData['description'];

                if (isset($serviceData['image'])) {
                    $imageName = time() . '.' . $serviceData['image']->extension();
                    $serviceData['image']->move(public_path('service_images'), $imageName);
                    $newService->image = $imageName;
                }

                $newService->save();
                $updatedIds[] = $newService->id;
            } else {
                $service = Service::where('user_id', Auth::id())->findOrFail($key);
                $service->update([
                    'name' => $serviceData['name'],
                    'description' => $serviceData['description'],
                ]);

                if (isset($serviceData['image'])) {
                    if ($service->image && file_exists(public_path('service_images/' . $service->image))) {
                        unlink(public_path('service_images/' . $service->image));
                    }

                    $imageName = time() . '.' . $serviceData['image']->extension();
                    $serviceData['image']->move(public_path('service_images'), $imageName);
                    $service->image = $imageName;
                }

                $updatedIds[] = $service->id;
            }
        }

        Service::where('user_id', Auth::id())->whereNotIn('id', $updatedIds)->delete();

        return redirect()->route('service.edit')->with('success', 'Service details updated successfully');
    }
}
