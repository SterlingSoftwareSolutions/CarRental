<?php

namespace App\Http\Controllers;

use App\Models\Surcharge;
use Illuminate\Http\Request;

class SurchargeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.surcharges.index', ['surcharges' => Surcharge::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Surcharge $surcharge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surcharge $surcharge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surcharge $surcharge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surcharge $surcharge)
    {
        //
    }
}
