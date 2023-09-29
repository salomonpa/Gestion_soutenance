<?php

namespace App\Http\Controllers;
use App\Models\Directeurmemoire;
use App\Http\Controllers\Controller;
use App\Models\Enseignant;
use App\Models\Jury;
use Illuminate\Http\Request;
use App\Models\Maitrestage;
use App\Models\Presidentj;


class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jury = Jury::all();
        return view('jury.liste', compact('jury'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
            $enseignants = Enseignant::all();
            $directeurmemoire = Directeurmemoire::all();
            $maitrestage = Maitrestage::all();
            $presidentj = Presidentj::all();
            return view('jury.ajout', compact('enseignants', 'directeurmemoire', 'maitrestage', 'presidentj'));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-> validate([
            'enseignants_id'=> 'required',
            'directeurmemoires_id' => 'required',
            'maitrestages_id' => 'required',
            'presidentjs_id' => 'required',

           ]);

           $jury = new Jury();
           $jury->enseignants_id = $request->enseignants_id;
           $jury->directeurmemoires_id = $request->directeurmemoires_id;
           $jury->maitrestages_id = $request->maitrestages_id;
           $jury->presidentjs_id = $request->presidentjs_id;
   
           $jury->save();
   
           return redirect()->route('jury.index')->with('status', 'le jury a bien été ajouter avec succès');
    }
   
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('jury.details',[

            'jury' => Jury::find($id)

        ]);

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
