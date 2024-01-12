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
        return view('dashboard.professeur.liste');
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
        }

        Professeur::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'departement' => $data['departement'],
            'telephone' => $data['telephone'],
            'adresse' => $data['adresse'],
            'profile' => $nameFile,
            'user_id' => $user->id
        ]);

        return view('dashboard.professeur.liste');
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
