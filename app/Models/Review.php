<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public function getrestoreview(){
        return $this->belongsTo(User::class,'resto_id','id');
    }
    public function getuserreview(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
