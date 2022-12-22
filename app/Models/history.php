<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    public function getorder(){
        return $this->belongsTo(order::class,'orders_id','id');
    }
}
