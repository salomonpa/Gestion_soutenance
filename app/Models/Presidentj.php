<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidentj extends Model
{
    protected $guarded = [

    ];
    function Jury(){
        return $this->hasOne(Jury::class);
}
}
