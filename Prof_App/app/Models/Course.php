<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['fileName', 'titre', 'module_id', 'description', 'professeur_id'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class,'professeur_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
