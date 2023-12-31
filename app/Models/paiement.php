<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function reservation(){
        return $this->hasMany(reservation::class);
    }
    
    public function user(){
        return $this->hasMany(User::class);
    }
}
