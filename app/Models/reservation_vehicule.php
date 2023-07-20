<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_vehicule extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function vehicule(){
        return $this->hasMany(Vehicule::class);
    }
    public function reservation(){
        return $this->hasMany(reservation::class);
    }
}
