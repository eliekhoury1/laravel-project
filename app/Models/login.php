<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;
    public function getStore(){
        return $this->hasOne(store::class);
    }

    public function getAddfoods(){
        return $this->hasMany(addfood::class);
    } 



}
