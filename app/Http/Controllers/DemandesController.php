<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\only;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class DemandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = Demande::all();
        return view('demande.liste', compact('demandes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demande.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $demandes = new Demande();
        $demandes->motif = $request->motif;
        $demandes->statut = $request->statut;
        $demandes->periode_soutenance = $request->periode_soutenance;
        $demandes->heure_soutenance = $request->heure_soutenance;
        
        $demande->save();
    
        return redirect()->route('demandes.index')->with('status', 'demande a été ajouté avec succes.');
       


    }
    public function store_approuve_traitement(Request $request, $id)
    {
       $demandes = Demande::find($id);

       $demandes->store_approuve_traitement([
           'motif' => $request->motif,
           'statut' => $request->statut,
           'periode_soutenance' => $request->periode_soutenance,
           'heure_soutenance' => $request->heure_soutenance,


       ]);
       return redirect()->route('demandes.store')->with('status', 'le statut de la demande a bien été approuvé ');
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
