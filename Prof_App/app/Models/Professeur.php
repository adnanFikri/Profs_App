<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'departement', 'telephone', 'adresse', 'profile', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function module()
    {
        return $this->hasMany(Module::class);
    }
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
