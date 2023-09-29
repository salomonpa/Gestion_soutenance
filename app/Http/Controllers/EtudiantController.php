<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiant = Etudiant::all();
        return view('etudiants.liste', compact('etudiant'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiants.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([

        //     'nom'=>'required',
        //     'prenom'=>'required',
        //     'date_naissance'=>'required',
        //     'phone_etudiant'=>'required',
        //     'filiere'=>'required',
        //     'niveau'=>'required',
        //     'photo_etudiant'=>'required',
            
        // ]);
    
        $etudiants = new Etudiant();
        $etudiants->nom = $request->nom;
        $etudiants->prenom = $request->prenom;
        $etudiants->date_naiss = $request->date_naiss;
        $etudiants->email = $request->email;
        $etudiants->niveau_etude = $request->niveau_etude;
        $etudiants->filiere = $request->filiere;
        $etudiants->photo_etudiant= $request->photo_etudiant->store('photo', 'public');

        $etudiants->save();
    
        return redirect()->route('etudiants.index')->with('status', 'Etudiant a été ajouté avec succes.');
       
    

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('etudiants.details',[

            'etudiant' => Etudiant::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)

    {
        $etudiants = etudiant::find($id);
        return view('etudiants.modifier', compact('etudiants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiants = etudiant::find($id);
            

        $etudiants->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'date_naiss'=>$request->date_naiss,
            'email'=>$request->email,
            'niveau_etude'=>$request->niveau_etude,
            'filiere'=>$request->filiere,
            'photo_etudiant'=>$request->photo_etudiant,
            
        ]);
    
        return redirect()->route('etudiants.index')->with('status', 'Etudiant a été modifié avec succes.');
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiants = etudiant::find($id);
        $etudiants->delete();
        return redirect()->route('etudiants.index')->with('status', 'Etudiant a été supprimé avec succes.');

    }
}
