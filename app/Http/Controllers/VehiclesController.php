<?php

namespace App\Http\Controllers;

use App\Models\VehicleImage;
use App\Models\Vehicles;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function show_all_vehicles(Request $request)
    {
        $query = Vehicles::query();
        $vehicles = $query->with('images')->get();

        return view('pages.admin.vehicles', ['vehicles' => $vehicles]);
    }
    public function store(Request $request)
    {
     
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
            'price' => $request->doors,  
            'passengers' => $request->passengers,
        ]);

        for ($i = 1; $i <= 4; $i++) {
            
            if ($request->hasFile('image_' . $i)) {
                $imagePath = $request->file('image_' . $i)->store('public/vehicle_images');
                VehicleImage::create([
                    'vehicle_id' => $car->id,
                    'image_path' => $imagePath,
                ]);
            }
        }
        // You can add additional logic or redirect here
    
        return redirect()->route('vehicles.all')->with('success', 'Vehicle created successfully.');
    }
}
