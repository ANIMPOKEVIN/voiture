<?php

namespace App\Http\Controllers;

use App\Models\vehicule;
use App\Models\agence;
use App\Models\typevehicule;
use App\Models\user;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicule = vehicule::all();
        return view('vehicule.index', compact('vehicule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $agence = agence::all();
        $type_vehicule = TypeVehicule::all();
        return view('vehicule.create', compact('type_vehicule','user','agence'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'mark' => 'required',
            'model' => 'required',
            'vehicle_image' => 'required',
            'transmission' => 'required',
            'availability' => 'required',
            'price_per_hour' => 'required',
            
            
        ]);
        $data = $request->all();
        
        //commande pour uplod les images   au prealable je cree un dossier de stockage avec php artisan storage:link
        if(!empty($request->file('vehicle_image'))){
        $url = $request->file('vehicle_image')->store('uploads/images/vehicle' , 'public');
        $photo = url('storage/' .$url);
        $data['vehicle_image'] = $photo;
        }
        
        Vehicule::create($data);
        return redirect('vehicule')->with('status', 'vehicule ajouter avec succes!');
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
        $vehicule = Vehicule::all();
        $vehicule = Vehicule::find($id);
        return view('vehicule.edit', compact('vehicule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'mark' => 'required',
            'model' => 'required',
            'vehicle_image' => 'required',
            'transmission' => 'required',
            'availability' => 'required',
            'price_per_hour' => 'required',
           
            
        ]);
        $data = $request->all();
        $vehicule = Vehicule::find($id);
        $vehicule->update($data);
        return redirect('vehicule');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        vehicule::destroy($id);
        return redirect('vehicule')->with('status', 'vehicule supprimer avec succes!');
    }

//route pour modifier le statut du vehicule
    public function modifier(Request $request, string $id)
    {
        $request->validate([
           
            'availability' => 'required',
        ]);
        $vehicule = vehicule::find($id);
        $vehicule-> availability = $request->availability;
        $vehicule->modifier();

        return redirect('/vehicule');
    }

}
