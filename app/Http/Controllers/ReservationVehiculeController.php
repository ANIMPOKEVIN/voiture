<?php

namespace App\Http\Controllers;

use App\Models\reservation_vehicule;
use App\Models\vehicule;
use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationVehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation_vehicule = reservation_vehicule::all();
        return view('reservation_vehicule.index', compact('reservation_vehicule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vehicules = vehicule::all();
        $reservation = reservation::all();
        return view('reservation_vehicule.create', compact('vehicules','reservation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'price_per_hour' => 'required',
        ]);
        $data = $request->all();
        reservation_vehicule::create($data);
        return redirect('reservation_vehicule');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservation_vehicule = reservation_vehicule::all();
        $reservation_vehicule = reservation_vehicule::find($id);
        return view('reservation_vehicule.edit', compact('reservation_vehicule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'price_per_hour' => 'required',
        ]);
        $data = $request->all();
        $reservation_vehicule = reservation_vehicule::find($id);
        $reservation_vehicule->update($data);
        return redirect('reservation_vehicule');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        reservation_vehicule::destroy($id);
        return redirect('reservation_vehicule');
    }
}
