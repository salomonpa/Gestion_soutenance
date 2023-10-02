<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jury;
use App\Models\Salle;
use App\Models\Demande;

class SoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soutenances = soutenance::all();
        return view('soutenances.liste' , compact('soutenances'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    

        $demandes = demande::where('statut', '=', 'accepté')->get();
        $juries = jury::all();
        $salles = salle::all();
        return view('soutenances.ajout', compact('juries','salles', 'demandes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // $request->validate([

        //     'date'=>'required',
        //     'heure'=>'required',
        //     
        //     'juries_id'=>'required',
        //     'salles_id'=>'required',
        //     'demandes_id'=>'required',
        // ]);
        $soutenances = new soutenance();
        $soutenances->date = $request->date;
        $soutenances->heure = $request->heure;
        $soutenances->theme = $request->theme;
        $soutenances->juries_id= $request->juries_id ;
        $soutenances->salles_id = $request->salles_id;
        $soutenances->demandes_id = $request->demandes_id;
        $soutenances->save();

        return redirect('soutenances.liste')->with('status', 'Soutenance a  été ajouté avec succes.');

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
