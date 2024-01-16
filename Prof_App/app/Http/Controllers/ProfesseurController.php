<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profs = Professeur::all();
        return view('dashboard.professeur.liste', compact('profs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.professeur.ajouter');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'role' => "prof",
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if ($data->hasFile('profile')) {
            $newfile = $data->file('profile');

            $nameFile = time() . '.' . $newfile->getClientOriginalExtension();
            $newfile->storeAs('public/images',$nameFile);
        }else{
            $nameFile = 'user.jpg';
        }

        Professeur::create([
            'name' => $data['name'],
            'departement' => $data['departement'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'adresse' => $data['adresse'],
            'profile' => $nameFile,
            'user_id' => $user->id
        ]);

        return redirect()->route('professeur.index')->with('success', 'Professor Added successfully.');
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
    public function edit($id)
    {
        $prof = Professeur::findOrFail($id);
        return view('dashboard.professeur.edit', compact('prof'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
        $professor = Professeur::findOrFail($id);

        if ($data->hasFile('profile')) {
            $newfile = $data->file('profile');

            $nameFile = time() . '.' . $newfile->getClientOriginalExtension();
            $newfile->storeAs('public/images',$nameFile);
        }else{
            $nameFile = $professor->profile;
        }

        $professor->update([
            'name' => $data['name'],
            'departement' => $data['departement'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'adresse' => $data['adresse'],
            'profile' => $nameFile,
        ]);

        return redirect()->route('professeur.index')->with('success', 'Professor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professor = Professeur::findOrFail($id);
        $professor->delete();

        return redirect()->route('professeur.index')->with('success', 'Professor deleted successfully.');
    }
}
