<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;protected $fillable = [
        'type_vehicule',    
        'mark',
        'model',
        'vehicle_image',
        'color',
        'transmission',
        'availability',
        'price_per_hour',
        'agence_id',
        'user_id',
    ];

    protected $guarded = [];
    public function agence(){
        return $this->hasMany(agence::class);
    }
    public function user(){
        return $this->hasMany(User::class);
    }
    // public function type_vehicule(){
    //     return $this->hasMany(TypeVehicule::class);
    // }
  
}
