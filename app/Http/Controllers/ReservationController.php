<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Models\User;
use App\Notifications\Approuver;
use App\Notifications\Rejeter;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation = reservation::all();
        return view('reservation.index', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('reservation.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'created' => 'required',
            'modify' => 'required',
            'deleted' => 'required',
        ]);
        $data = $request->all();
        reservation::create($data);
        return redirect('reservation');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reservation = reservation::find($id);
        return view('reservation.show',compact('reservation'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservation = reservation::all();
        $reservation = reservation::find($id);
        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
           
            'status' => 'required',
        ]);
        $reservation = reservation::find($request->id);
        $reservation-> status = $request->status;
        $reservation->update();
        return redirect('reservation');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        reservation::destroy($id);
        return redirect('reservation');
    }
}
