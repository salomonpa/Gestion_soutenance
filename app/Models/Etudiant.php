<?php

namespace App\Models;
use App\Models\Demande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class etudiant extends Model
{
    use HasFactory;
    protected $guarded = [
       
    ];  
    
    function Demande(){
        return $this->hasOne(Demande::class);
}
}