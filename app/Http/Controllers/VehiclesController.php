<?php

namespace App\Http\Controllers;

use App\Models\Attachments;
use App\Models\VehicleImage;
use App\Models\Vehicles;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{

    public function index(Request $request)
    {
        $query = Vehicles::query();

        $vehicles = Vehicles::query()->with(['images' => function ($query) {
            $query->where('attachment_type', 'Vehicle Image');
        }])->get();


        return view('pages.carlist', ['vehicles' => $vehicles]);
    }

    public function show_all_vehicles(Request $request)
    {
        $query = Vehicles::query();
        $vehicles = Vehicles::query()->with(['images' => function ($query) {
            $query->where('attachment_type', 'Vehicle Image');
        }])->get();

        return view('pages.admin.vehicles', ['vehicles' => $vehicles]);
    }
    public function edit_vehicle(Request $request,  $vehicle_id)
    {
        $query = Vehicles::query();
        $vehicles = Vehicles::query()->with(['images' => function ($query) {
            $query->where('attachment_type', 'Vehicle Image');
        }])->get();

        $vehicle = Vehicles::query()
            ->with(['images' => function ($query) {
                $query->where('attachment_type', 'Vehicle Image');
            }])
            ->find($vehicle_id);


        return view('pages.admin.vehicles', ['vehicles' => $vehicles, 'vehicle_one' => $vehicle]);
    }


    public function view_vehicle(Request $request,  $vehicle_id)
    {
        // $vehicles = Vehicles::query()->with(['images' => function ($query) {
        //     $query->where('attachment_type', 'Vehicle Image');
        // }])->get();

        $vehicle = Vehicles::query()
            ->with(['images' => function ($query) {
                $query->where('attachment_type', 'Vehicle Image');
            }])
            ->find($vehicle_id);


        return view('pages.carview', ['vehicle' => $vehicle]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'vin' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'fuel_type' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'mileage' => 'required|numeric|min:0',
            'color' => 'required|string|max:255',
            'luggage' => 'required|integer|min:0',
            'doors' => 'required|integer|min:1',
            'passengers' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'image_1' => 'required|image|max:2048', // Max file size of 2MB
            'image_2' => 'nullable|image|max:2048',
            'image_3' => 'nullable|image|max:2048',
            'image_4' => 'nullable|image|max:2048',
        ]);
        $car = Vehicles::create([
            'make' => $request->make,
            'model' => $request->model,
            'vin' => $request->vin,
            'body_type' => $request->body_type,
            'year' => $request->year,
            'fuel_type' => $request->fuel_type,
            'transmission' => $request->transmission,
            'mileage' => $request->mileage,
            'color' => $request->color,
            'luggage' => $request->luggage,
            'doors' => $request->doors,
            'price' => $request->price,
            'description' => $request->description,
            'short_Description' => $request->short_Description,
            'passengers' => $request->passengers,
        ]);


        for ($i = 1; $i <= 4; $i++) {

            if ($request->hasFile('image_' . $i)) {
                $imagePath = $request->file('image_' . $i)->store('public/vehicle_images');
                Attachments::create([
                    'referenceId' => $car->id,
                    'file_path' => $imagePath,
                    'attachment_type' => "Vehicle Image"
                ]);
            }
        }
        // You can add additional logic or redirect here

        return redirect()->route('vehicles.all')->with('success', 'Vehicle created successfully.');
    }


    public function update(Request $request)
    {
        $vehicle = Vehicles::find($request->vehicle_id);

        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'vin' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'fuel_type' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'mileage' => 'required|numeric|min:0',
            'color' => 'required|string|max:255',
            'luggage' => 'required|integer|min:0',
            'doors' => 'required|integer|min:1',
            'passengers' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'short_Description' => 'required|string|max:255',
            'image_1' => 'required|image|max:2048', // Max file size of 2MB
            'image_2' => 'required|image|max:2048',
            'image_3' => 'required|image|max:2048',
            'image_4' => 'required|image|max:2048',
        ]);

        for ($i = 1; $i <= 4; $i++) {

            if ($request->hasFile('image_' . $i)) {
                $imagePath = $request->file('image_' . $i)->store('public/vehicle_images');
                Attachments::updateOrCreate([
                    'referenceId' => $vehicle->id,
                ], [
                    'file_path' => $imagePath,
                ]);
            }
        }

            $vehicle->update($validatedData);


            return redirect()->route('vehicles.all')
                ->with('success', 'User details updated successfully.');
        
    }

    public function destroy($id)
    {
        $vehicle = Vehicles::find($id);

        if (!$vehicle) {
            dd($id);
            return redirect()->route('vehicles.all')
                ->with('error', 'vehicle not found.');
        }

        // Delete vehicle's attachment if it exists
        Attachments::where('referenceId', $vehicle->id)->delete();

        $vehicle->delete();

        return redirect()->route('vehicles.all')
            ->with('success', 'vehicle deleted successfully.');
    }
}
