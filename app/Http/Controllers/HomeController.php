<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $vehicles = Vehicles::query()->with(['images' => function ($query) {
            $query->where('attachment_type', 'Vehicle Image');
        }])->get();


        return view('pages.home', ['vehicles' => $vehicles]);
    }
}
