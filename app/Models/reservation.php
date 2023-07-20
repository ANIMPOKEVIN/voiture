<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;
    protected $fillable = [
           'id_vehile',
            'first_name',
            'last_name',
            'email',
            'phone_number',
            'place_of_care',
            'place_of_deposit',
            'start_date',
            'end_date',
            'status',
    ];
    protected $guarded = [];
    // public function user(){
    //     return $this->hasMany(User::class);
    // }
}
