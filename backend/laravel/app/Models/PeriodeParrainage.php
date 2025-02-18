<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodeParrainage extends Model
{
    use HasFactory;

    protected $table = 'periode_parrainage';

    protected $fillable = [
        'date_debut',
        'date_fin',
        'etat'
    ];

    public $timestamps = false;

    // Vérifier si la période de parrainage est ouverte
    public function estOuverte()
    {
        return $this->etat === 'ouverte';
    }
}
