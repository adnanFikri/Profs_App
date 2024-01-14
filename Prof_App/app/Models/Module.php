<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'time', 'professeur_id'];
    public function professeur()
    {
        return $this->belongsTo(Professeur::class,'professeur_id');
    }
}
