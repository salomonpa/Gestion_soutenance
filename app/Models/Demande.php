<?php

namespace App\Models;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    
    use HasFactory;
    protected $guarded = [
       
    ];

    function Etudiant(){
        return $this->belongsTo(Etudiant::class, 'etudiants_id');
}

}
