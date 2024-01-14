<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'second_name',
        'cin',
        'birth',
        'adresse',
        'telephone',
        'sector_lp',
        'email',
        'profile',
        'location_profile',
        'sector_bac',
        'date_bac',
        'note_bac',
        'diplome_bac',
        'location_diplome_bac',
        'releve_bac',
        'location_releve_bac',
        'university_name',
        'secteur_bac_2',
        'date_bac_2',
        'note_general',
        'diplome_bac_2',
        'location_diplome_bac_2',
        'releve_bac_2',
        'location_releve_bac_2',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
