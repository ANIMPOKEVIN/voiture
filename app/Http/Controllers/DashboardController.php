<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\Reservation;
class DashboardController extends Controller
{
      public function afficher_dashboard()
  {
    $vehicules= Vehicule::count();
    $disponible= Vehicule::where('availability','disponible')->count();
    $non_disponible= Vehicule::where('availability','non_disponible')->count();
    $approuver= Reservation::where('status','approuver')->count();
    return view('/dashboard',compact('vehicules','disponible','non_disponible','approuver'));
  }
}
