<?php

namespace App\Models;
use App\Models\enseignant;
use App\Models\maitre_stage;
use App\Models\directeur_memoire;
use App\Models\president;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jury extends Model
{
    use HasFactory;
    protected $guarded = [
        
    ];

    function enseignant(){
        return $this->belongsTo(enseignant::class, 'enseignants_id');
       }

       function maitre_stage(){
        return $this->belongsTo(maitre_stage::class, 'maitrestages_id');
       }

       function directeur_memoire(){
        return $this->belongsTo(directeur_memoire::class, 'directeur_memoires_id');
       }

       function president(){
        return $this->belongsTo(president::class, 'presidentjs_id');
}



}
