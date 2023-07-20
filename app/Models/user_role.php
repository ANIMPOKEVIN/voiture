<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    use HasFactory;
    public function role(){
        return $this->belongsToMany(role::class);
    }
    public function user(){
        return $this->belongsToMany(user::class);
    }
}
