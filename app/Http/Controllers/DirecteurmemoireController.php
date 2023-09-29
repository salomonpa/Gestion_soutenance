<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directeurmemoire;

class DirecteurmemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directeurmemoire = Directeurmemoire::all();
        return view('directeurmemoire.liste', compact('directeurmemoire'));
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('directeurmemoire.ajout');
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
            'adresse'=>'required',
            'fonction'=>'required',
            
            
        ]);
       $directeurmemoires = new Directeurmemoire();
       $directeurmemoires->nom = $request->nom;
       $directeurmemoires->prenom = $request->prenom;
       $directeurmemoires->telephone = $request->telephone;
       $directeurmemoires->adresse = $request->adresse;
       $directeurmemoires->fonction = $request->fonction;
       $directeurmemoires->save();
    
        return redirect()->route('directeurmemoire.index')->with('status', 'directeur a été ajouté avec succes.');
    


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('directeurmemoire.details',[

            'directeurmemoire' => Directeurmemoire::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $directeurmemoire = directeurmemoire::find($id);
        return view('directeurmemoire.modifier', compact('directeurmemoire'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $directeurmemoires = directeurmemoire::find($id);
            

        $directeurmemoire->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'fonction'=>$request->fonction,
               
        ]);
    
        return redirect()->route('directeurmemoire.index')->with('status', 'directeur memoire a été modifié avec succes.');
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $directeurmemoire = directeurmemoires::find($id);
        $directeurmemoire->delete();
        return redirect()->route('directeurmemoire.index')->with('status', 'Directeur memoire a été supprimé avec succes.');

    }
}
