<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emploi extends Model
{
    use HasFactory;
    protected $fillable = ['time', 'professeur_id', 'module_id', 'salle','jour'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
