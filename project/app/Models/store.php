<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;

    public function getLogin(){
        return $this->belongsTo(user::class,"user_id","id");
    }
}
