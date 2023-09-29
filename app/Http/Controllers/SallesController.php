<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salle;


class SallesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salle = Salle::all();
        return view('salles.liste', compact('salle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salles.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $salles = new Salle();
        $salles->libelle = $request->libelle;
       
       

        $salles->save();
    
        return redirect()->route('salles.index')->with('status', 'salle a été ajouté avec succes.');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('salles.details',[

            'salle' => Salles::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salles = salle::find($id);
        return view('salles.modifier', compact('salles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salles = salle::find($id);
            

        $etudiants->update([
            'libelle'=>$request->libelle,
            
           
        ]);

        return redirect()->route('salles.index')->with('status', 'salle a été ajouté avec succes.');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salles = salle::find($id);
        $salles->delete();
        return redirect()->route('salles.index')->with('status', ' La salle a été supprimé avec succes.');

    }
}
