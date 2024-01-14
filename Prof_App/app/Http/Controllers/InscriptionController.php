<?php

namespace App\Http\Controllers;
use App\Models\Inscription;
use App\Models\User;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function index()
    {
        $inscriptions = Inscription::all();
        return view('dashboard.inscription.index', compact('inscriptions'));
    }
    public function create()
    {
        return view('dashboard.inscription.add');
    }
    public function show($id)
    {
        $inscription = Inscription::find($id);
        if (!$inscription) {
            abort(404);
        }
        return view('dashboard.inscription.show',compact('inscription'));
    }
    public function store(Request $data)
    {
        //profile
        if ($data->hasFile('profile')) {
            $newfile_profile = $data->file('profile');

            $nameFile_profile = time() . '.' . $newfile_profile->getClientOriginalExtension();
            $newfile_profile->storeAs('public/images',$nameFile_profile);
        }
        //diplome bac
        if ($data->hasFile('diplome_bac')) {
            $newfile_bac = $data->file('diplome_bac');

            $nameFile_bac = time() . '.' . $newfile_bac->getClientOriginalExtension();
            $newfile_bac->storeAs('public/images',$nameFile_bac);
        }
        //releve bac
        if ($data->hasFile('releve_bac')) {
            $newfile_releve = $data->file('releve_bac');

            $nameFile_releve = time() . '.' . $newfile_releve->getClientOriginalExtension();
            $newfile_releve->storeAs('public/images',$nameFile_releve);
        }
        //diplome bac+2
        if ($data->hasFile('diplome_bac_2')) {
            $newfile_bac_2 = $data->file('diplome_bac');

            $nameFile_bac_2 = time() . '.' . $newfile_bac_2->getClientOriginalExtension();
            $newfile_bac_2->storeAs('public/images',$nameFile_bac_2);
        }
        //releve bac+2
        if ($data->hasFile('releve_bac_2')) {
            $newfile_releve_2 = $data->file('releve_bac_2');

            $nameFile_releve_2 = time() . '.' . $newfile_releve_2->getClientOriginalExtension();
            $newfile_releve_2->storeAs('public/images',$nameFile_releve_2);
        }
        $inscription = Inscription::create([
            'user_id' => $data['user_id'],
            'first_name' => $data['first_name'],
            'second_name' => $data['second_name'],
            'cin' => $data['cin'],
            'birth' => $data['birth'],
            'adresse' => $data['adresse'],
            'telephone' => $data['telephone'],
            'sector_lp' => $data['sector_lp'],
            'email' => $data['email'],
            'profile' => $nameFile_profile,
            'sector_bac' => $data['sector_bac'],
            'date_bac' => $data['date_bac'],
            'note_bac' => $data['note_bac'],
            'diplome_bac' => $nameFile_bac,
            'releve_bac' => $nameFile_releve,
            'university_name' => $data['university_name'],
            'secteur_bac_2' => $data['secteur_bac_2'],
            'date_bac_2' => $data['date_bac_2'],
            'note_general' => $data['note_general'],
            'diplome_bac_2' =>$nameFile_bac_2,
            'releve_bac_2' => $nameFile_releve_2,
        ]);



        return redirect()->route('inscription.show', ['id' => $inscription->id]);
    }
    public function edit($id)
    {
        $inscription = Inscription::find($id);
        if (!$inscription) {
            abort(404);
        }
        return view('dashboard.inscription.edit', ['inscription' => $inscription]);
    }
    public function update(Request $data, $id)
    {
        $inscription = Inscription::find($id);

        if (!$inscription) {
            abort(404);
        }
        $inscription->update([
            'user_id' => $data['user_id'],
            'first_name' => $data['first_name'],
            'second_name' => $data['second_name'],
            'cin' => $data['cin'],
            'birth' => $data['birth'],
            'adresse' => $data['adresse'],
            'telephone' => $data['telephone'],
            'sector_lp' => $data['sector_lp'],
            'email' => $data['email'],
            'sector_bac' => $data['sector_bac'],
            'date_bac' => $data['date_bac'],
            'note_bac' => $data['note_bac'],
            'university_name' => $data['university_name'],
            'secteur_bac_2' => $data['secteur_bac_2'],
            'date_bac_2' => $data['date_bac_2'],
            'note_general' => $data['note_general'],
        ]);
        $this->updateFile($data, 'profile', $inscription, 'profile');
        $this->updateFile($data, 'diplome_bac', $inscription, 'diplome_bac');
        $this->updateFile($data, 'releve_bac', $inscription, 'releve_bac');
        $this->updateFile($data, 'diplome_bac_2', $inscription, 'diplome_bac_2');
        $this->updateFile($data, 'releve_bac_2', $inscription, 'releve_bac_2');

        return redirect()->route('inscription.show', ['id' => $inscription->id]);
    }

    private function updateFile(Request $data, $field, $model, $attribute)
    {
        if ($data->hasFile($field)) {
            $newFile = $data->file($field);
            $newFileName = time() . '.' . $newFile->getClientOriginalExtension();
            $newFile->storeAs('public/images', $newFileName);
            $model->$attribute = $newFileName;
            $model->save();
        }
    }
    public function delete($id)
    {
        $inscription = Inscription::find($id);
        if (!$inscription) {
            abort(404);
        }
        $inscription->delete();
        return redirect()->route('inscription.index')->with('success', 'Inscription deleted successfully');
    }
    public function list_filter(){
        $idUsers = User::whereIn('role', ['student'])->pluck('id')->toArray();
        $students = Inscription::whereIn('user_id', $idUsers)->get();
        return view('dashboard.inscription.list_filter', compact('students'));
    }
    public function form_filter(){
        return view('dashboard.inscription.filter');
    }
    public function filter(Request $data){
        $limit = $data->input('limit');
        $minimumNote = $data->input('minimum_note');
        $userIds = Inscription::where('note_general', '>=', $minimumNote)
            ->whereHas('user', function ($query) {
                $query->where('role', 'etud');
            })
            ->take($limit)
            ->pluck('user_id')
            ->toArray();
        User::whereIn('id', $userIds)->update(['role' => 'student']);
    
        // Redirect to the list_filter route
        return redirect()->route('inscription.list_filter');
    }
    
}
