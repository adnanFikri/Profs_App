<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::with('courses')->get();
        return view('dashboard.course.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $modules = Module::all();
        return view('dashboard.course.create', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {

        $data->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'module_id' => 'required',
            'file' => 'required|mimes:pdf,doc,docx|max:5048',
        ]);

        if ($data->hasFile('file')) {
            $newfile = $data->file('file');

            $nameFile = time() . '.' . $newfile->getClientOriginalExtension();
            $newfile->storeAs('public/courses',$nameFile);
        }
        $prof_id = auth()->id();

        Course::create([
            'titre' => $data['titre'],
            'description' => $data['description'],
            'module_id' => $data['module'],
            'professeur_id' => $prof_id,
            'fileName' => $nameFile,
        ]);

        return redirect()->route('course.index')->with('success', 'course Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Module $module)
    {
        $courses = $module->courses;

        return view('dashboard.course.course', compact('courses', 'module'));
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
