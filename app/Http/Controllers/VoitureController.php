<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function voiture()
    {
        //commande pour recuperer dans la base de donnees les vehicules qui ont uniquement le statut disponible
        $voitures=Vehicule::all();

        return view('acceuil.voiture', compact('voitures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $voitures=Vehicule::all();
        return view('voiture.create', compact('voitures'));

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
    public function show(string $id)
    {
       $voitures = Vehicule::find($id);
       return view('acceuil.show',compact('voitures'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
