<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    public function getLogin(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getAllFoods(){
        return $this->belongsToMany(Foods::class,'cartfoods','carts_id','foods_id');
    }
}
