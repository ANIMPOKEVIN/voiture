<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use App\Models\TypeVehicule;
use App\Models\Reservation;
use App\Notifications\Approuver;
use Illuminate\Http\Request;

class ResrvBookingController extends Controller
{
    public function new_booking($id)
    {
        $vehicules = Vehicule::all();
        $vehicules = Vehicule::find($id);
        $type_vehicule = TypeVehicule::find($id);
        return view('acceuil.booking', compact('vehicules','type_vehicule'));
    }

    public function add_booking(Request $request)
    {
        $this->validate($request,[
            'id_vehile' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'place_of_care' => 'required',
            'place_of_deposit' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'price_per_hour' => 'required',
            'heur' => 'required',
            'prix' => 'required',
        ]);
        $data = $request->all();
        reservation::create($data);
        return redirect('/voiture')->with('ajouter', 'Réservation envoyer avec succes!');
    }
}
