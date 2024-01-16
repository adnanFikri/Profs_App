<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emploi;
use App\Models\Module;
use App\Models\Professeur;
class EmploiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emplois = Emploi::all();
        return view('dashboard.emploi.liste',compact('emplois'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::all();
        $professeurs = Professeur::all();
        return view('dashboard.emploi.create', compact('modules','professeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $emplois = Emploi::all();
        $count = 0;
        foreach($emplois as $emploi){
            if($request->input('time')  == $emploi->time && $request->input('jour')  == $emploi->jour){
                $count = 1;
            }
            
        }
        if($count == 0) {
            Emploi::create([
                'time' => $request->input('time'),
                'professeur_id' => $request->input('professeur_id'),
                'module_id' => $request->input('module_id'),
                'salle' => $request->input('salle'),
                'jour' => $request->input('jour'),
            ]);
            return redirect()->route('emploi.index')->with('success', 'Emploi added successfully.');
        }else{
            return redirect()->route('emploi.create')->withErrors(['error' => "Désolé c'est pas vide"]);
        }
        

        
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
        $emploi = Emploi::findOrFail($id);
        $emploi->delete();

        return redirect()->route('emploi.index')->with('success', 'Emploi deleted successfully.');
    }
}
