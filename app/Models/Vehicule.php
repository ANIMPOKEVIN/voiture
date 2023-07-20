<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function agence(){
        return $this->hasMany(agence::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    public function type_vehicule(){
        return $this->hasMany(TypeVehicule::class);
    }
  
}
