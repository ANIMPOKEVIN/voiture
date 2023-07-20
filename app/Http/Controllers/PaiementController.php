<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\reservation;
use App\Models\paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paiement = paiement::all();
        return view('paiement.index', compact('paiement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        $reservation = reservation::all();
        return view('paiement.create', compact('user','reservation'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'amount' => 'required',
            'date' => 'required',
            'payment_method' => 'required',
            'created' => 'required',
            'modify' => 'required',
            'deleted' => 'required',
        ]);
        $data = $request->all();
        paiement::create($data);
        return redirect('paiement');
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
        $paiement = paiement::all();
        $paiement = paiement::find($id);
        return view('paiement.edit', compact('paiement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'amount' => 'required',
            'date' => 'required',
            'payment_method' => 'required',
            'created' => 'required',
            'modify' => 'required',
            'deleted' => 'required',
        ]);
        $data = $request->all();
        $paiement = paiement::find($id);
        $paiement->update($data);
        return redirect('paiement');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        paiement::destroy($id);
        return redirect('paiement');
    }
}
