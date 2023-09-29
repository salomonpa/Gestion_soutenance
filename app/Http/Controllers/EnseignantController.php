<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\EnseignantsControllerform_ensei;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignant = Enseignant::all();
        return view('enseignants.liste', compact('enseignant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enseignants.ajout');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'matiere'=>'required',
            
            
        ]);
        $enseignants = new Enseignant();
        $enseignants->nom = $request->nom;
        $enseignants->prenom = $request->prenom;
        $enseignants->telephone = $request->telephone;
        $enseignants->email = $request->email;
        $enseignants->matiere = $request->matiere;
        $enseignants->save();
    
        return redirect()->route('enseignants.index')->with('status', 'L enseignant a été ajouté avec succes.');
    



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('enseignants.details',[

            'enseignant' => Enseignant::find($id)

        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enseignants = Enseignant::find($id);
        return view('enseignants.modifier', compact('enseignants'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enseignants = Enseignant::find($id);

        $enseignants->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'matiere'=>$request->matiere,
           
        ]);
    
        return redirect()->route('enseignants.index')->with('status', 'Enseignant a été modifié avec succes.');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enseignants =  enseignant::find($id);
        $enseignants->delete();
        return redirect()->route('enseignants.index')->with('status', 'Enseignants a été supprimé avec succes.');

    }
}
