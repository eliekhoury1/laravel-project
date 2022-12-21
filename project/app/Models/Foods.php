<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;


    public function getLogin(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function getoffer(){
        return $this->hasOne(offer::class);
    }
}
