<?php

namespace App\Http\Controllers;
use App\Models\Professeur;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Module::all();
        return view('dashboard.modules.index', compact('modules'));
    }
    public function create()
    {
        $professeurs = Professeur::all();
        return view('dashboard.modules.create', compact('professeurs'));
    }
    public function store(Request $data)
    {
        Module::create([
            'name' => $data->input('name'),
            'time' => $data->input('time'),
            'professeur_id' => $data->input('professeur_id'),
        ]);
        return redirect()->route('module.index')->with('success', 'Module created successfully');
    }
    public function destroy($id)
    {
        $module = Module::find($id);

        if (!$module) {
            return redirect()->route('module.index')->with('error', 'Module not found');
        }
        $module->delete();
        return redirect()->route('module.index')->with('success', 'Module deleted successfully');
    }
}
