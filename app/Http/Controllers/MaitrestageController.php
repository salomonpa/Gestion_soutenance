<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maitrestage;

class MaitrestageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maitrestage = Maitrestage::all();
        return view('maitrestages.liste', compact('maitrestage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('maitrestages.ajout');
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
            'fonction'=>'required',
            
            
        ]);
        $maitrestages = new Maitrestage();
        $maitrestages->nom = $request->nom;
        $maitrestages->prenom = $request->prenom;
        $maitrestages->telephone = $request->telephone;
        $maitrestages->email = $request->email;
        $maitrestages->fonction = $request->fonction;

        $maitrestages->save();
    
        return redirect()->route('maitrestage.index')->with('status', 'Maitre de stage a été ajouté avec succes.');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('maitrestages.details',[

            ' maitrestage' => Maitrestage::find($id)

        ]);;
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $maitrestage = maitrestage::find($id);
        return view('maitrestage.modifier', compact('maitrestage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maitrestage = maitrestage::find($id);
            

        $maitrestage->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
            'fonction'=>$request->fonction,
               
        ]);
    
        return redirect()->route('maitrestage.index')->with('status', 'maitre de stage a été modifié avec succes.');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maitrestages = maitrestage::find($id);
        $maitrestages->delete();
        return redirect()->route('maitrestage.index')->with('status', 'maitre de stage a été supprimé avec succes.');

    }
}
