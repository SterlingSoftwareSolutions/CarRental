<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function show_all_vehicles(Request $request)
    {
        return view('pages.admin.vehicles', [
            'user' => $request->user(),
        ]);
    }
}
