<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrain extends Model
{
    use HasFactory;

    protected $table = 'parrains';

    protected $fillable = [
        'electeur_id',
        'email',
        'telephone',
        'code_authentification',
    ];

    // Relation avec l'électeur
    public function electeur()
    {
        return $this->belongsTo(Electeur::class);
    }

    // Relation avec les parrainages
    public function parrainages()
    {
        return $this->hasMany(Parrainage::class);
    }
}

