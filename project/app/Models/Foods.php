<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;


    public function getLogin(){
        return $this->belongsTo(User::class,'User_id','id');
    }
}
