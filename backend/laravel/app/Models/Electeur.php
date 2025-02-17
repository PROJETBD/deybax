<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electeur extends Model
{
    use HasFactory;

    protected $table = 'electeurs';
    
    protected $fillable = [
        'numero_cni',
        'numero_electeur',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'bureau_vote',
    ];

    // Relation avec les candidats
    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }

    // Relation avec les parrains
    public function parrain()
    {
        return $this->hasOne(Parrain::class);
    }
}
