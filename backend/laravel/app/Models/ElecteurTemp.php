<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElecteurTemp extends Model
{
    use HasFactory;

    protected $table = 'electeurs_temp';

    protected $fillable = [
        'numero_cni',
        'numero_electeur',
        'nom',
        'prenom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'bureau_vote',
        'status_validation',
    ];
}
