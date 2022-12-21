<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    use HasFactory;
    public function getfood(){
        return $this->belongsTo(food::class,'foods_id','id');
    }


}
