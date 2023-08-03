<?php

namespace App\Http\Controllers;
use App\Models\TypeVehicule;
use Illuminate\Http\Request;

class TypeVehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type_vehicule = TypeVehicule::all();
        return view('type_vehicule.index', compact('type_vehicule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type_vehicule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            
        ]);
        $data = $request->all();
        TypeVehicule::create($data);
        return redirect('type_vehicule')->with('ajouter', 'type vehicule ajouter avec succes!');
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
        $type_vehicule = TypeVehicule::all();
        $type_vehicule = TypeVehicule::find($id);
        return view('type_vehicule.edit', compact('type_vehicule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
        ]);
        $data = $request->all();
        $type_vehicule = TypeVehicule::find($id);
        $type_vehicule->update($data);
        return redirect('type_vehicule')->with('modifier', 'type vehicule modifier avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TypeVehicule::destroy($id);
        return redirect('type_vehicule')->with('status', 'type vehicule supprimer avec succes!');
    }
}
