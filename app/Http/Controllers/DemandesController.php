<?php

namespace App\Http\Controllers;

use App\Models\Demande;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Etudiant;



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
        $etudiants = Etudiant::all();
        return view('demande.ajout', compact('etudiants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        demande::create([
            'code'=> $request-> code,
            'statut'=> $request-> statut,
            'date'=> $request-> date,
            'periode'=> $request-> periode,
            'etudiants_id'=> $request-> etudiants_id,
        ]);
        // $request->validate([

            

        // ]);

        // $demandes = new demande();
        // $demandes->libelle = $request->libelle;
        // $demandes->titre = $request->titre;
        // $demandes->resume = $request->resume;
        // $demandes->date = $request->date;
        // $demandes->periode = $request->periode;
        // $demandes->etudiants_id = $request->etudiants_id;
        
        // $demandes->save();

        return redirect()->route('demande.index')->with('status', 'Une demande a  été ajoutée avec succes.');

       


    }

    
    //    $demandes = Demande::find($id);
    //    $etudiant = Etudiant::all();

    //    ([
    //        'motif' => $request->motif,
    //        'statut' => $request->statut,
    //        'periode_soutenance' => $request->periode_soutenance,
    //        'heure_soutenance' => $request->heure_soutenance,
    //        'etudiant'=>$request->etudiant,
    //     ]);
    //        $demande = new Demande();
    //        $demande->motif = $request->motif;
    //        $demande->statut = $request->statut;
    //        $demande->periode_soutenance = $request->periode_soutenance;
    //        $demande->heure_soutenance = $request->heure_soutenance;
    //        $demande->etudiant = $request->etudiant;
           
    //        $demandes->save();
       
    //        return redirect()->route('demande.index')->with('status', 'demande a été ajouté avec succes.');        
     


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
        $etudiants = etudiant::all();
        $demandes = demande::find($id);
        return view('demande.modifier',compact('demandes', 'etudiants'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $demandes = demande::find($id);

        $demandes->update([
            'statut' => $request->statut,
            'motif' => $request->motif,
        ]);

        return redirect()->route('demande.index')->with('status', 'Une demande a  été modifié avec succes.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $demandes = demande::find($id);
        $demandes->delete();
        return redirect()->route('enseignants.index')->with('status', 'Une demande a  été supprimée avec succes.');

    }
}
