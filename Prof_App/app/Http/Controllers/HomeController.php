<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Professeur;
use App\Models\User;
use App\Models\Inscription;
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
        if (auth()->user()->role == 'etud') {
            return view('dashboard.inscription.add');
        } else {
            return view('dashboard.analytics', compact('count_prof', 'count_module', 'count_inscri', 'count_students'));
        }
    }
}
