<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $guarded=[];
    // $fillable = [
    //        'id_vehile',
    //         'first_name',
    //         'last_name',
    //         'email',
    //         'phone_number',
    //         'place_of_care',
    //         'place_of_deposit',
    //         'start_date',
    //         'end_date',
    //         'status',
    //         'status',
    // ];
    // protected $guarded = [];
    public function user(){
        return $this->hasMany(User::class);
     }
    // public function vehicule(){
    //     return $this->hasMany(Vehicule::class);
    //  }


    //  public function setStatusAttribute($value)
    //  {
    //     $this->attributes['status']=$value;

    //     if($value == 'approuver')
    //     {
    //         $this->vehicule->update(['status'=> 'rejeter']);
    //     }
    //     else  if($value == 'rejeter')
    //     {
    //         $this->vehicule->update(['status'=> 'approuver']);
    //     }
    //  }
}
