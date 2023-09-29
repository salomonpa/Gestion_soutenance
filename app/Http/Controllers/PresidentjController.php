<?php

namespace App\Http\Controllers;

use App\Models\Presidentj;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresidentjController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidentj = Presidentj::all();
        return view('presidentj.liste', compact('presidentj'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('presidentj.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $presidentjs = new Presidentj ();
        $presidentjs->nom = $request->nom;
        $presidentjs->prenom = $request->prenom;
        $presidentjs->affiliation = $request->affiliation;
        $presidentjs->telephone = $request->telephone;
        $presidentjs->email = $request->email;
        $presidentjs->save();
    
        return redirect()->route('presidentj.index')->with('status', 'président a été ajouté avec succes.');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('presidentj.details',[

            'presidentj' => Presidentj::find($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $presidentjs =  Presidentj::find($id);
        return view('presidentj.modifier', compact('presidentjs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $presidentjs =presidentj::find($id);
            

        $presidentjs->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'affiliation'=>$request->affiliation,
            'telephone'=>$request->telephone,
            'email'=>$request->email,
           
        ]);
    
        return redirect()->route('presidentj.index')->with('status', 'Président a été modifié avec succes.');
       

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $presidentj = presidentj::find($id);
        $presidentj->delete();
        return redirect()->route('presidentj.index')->with('status', 'président de jury a été supprimé avec succes.');

    }
}
