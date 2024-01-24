<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Emploi;
use App\Models\Module;
use App\Models\Professeur;
use App\Models\Inscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_prof = Professeur::count();
        $count_module = Module::count();
        $count_inscri = Inscription::count();
        $count_students = User::where('role', 'student')->count();

        $emplois = Emploi::all();
        $lastChange = Emploi::latest('created_at')->value('created_at');
        $lastChange = Carbon::parse($lastChange);
        // Add one hour
        $lastChange->addHour();


        if (auth()->user()->role == 'etud') {
            return view('dashboard.inscription.add');
        } else {
            return view('dashboard.analytics', compact('count_prof', 'count_module', 'count_inscri', 'count_students', 'emplois', 'lastChange'));
        }
    }
}
