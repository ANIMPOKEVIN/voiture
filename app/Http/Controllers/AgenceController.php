<?php

namespace App\Http\Controllers;

use App\Models\agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agence = agence::all();
        return view('agence.index', compact('agence'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agence.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'adress' => 'required',
            'opening_time' => 'required',
            'phone_number' => 'required',
        ]);
        $data = $request->all();
        agence::create($data);
        return redirect('agence')->with('ajouter', 'Agence ajouter avec succes!');
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
        $agence = agence::all();
        $agence = agence::find($id);
        return view('agence.edit', compact('agence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'adress' => 'required',
            'opening_time' => 'required',
            'phone_number' => 'required',
        ]);
        $data = $request->all();
        $agence = agence::find($id);
        $agence->update($data);
        return redirect('agence')->with('modifier', 'Agence modifier avec succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        agence::destroy($id);
        return redirect('agence')->with('status', 'Agence supprimer avec succes!');
    }
}
