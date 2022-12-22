<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    public function gethistory(){
        return $this->hasMany(history::class);
    }
    public function getLogin(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getresto(){
        return $this->belongsTo(User::class,'resto_id','id');
    }
}
