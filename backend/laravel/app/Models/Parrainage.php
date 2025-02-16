<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrainage extends Model
{
    use HasFactory;

    protected $table = 'parrainages';

    protected $fillable = [
        'id_parrain',
        'id_candidat',
        'code_validation',
        'date_parrainage'
    ];

    public $timestamps = false;

    // Relation avec Parrain
    public function parrain()
    {
        return $this->belongsTo(Parrain::class, 'id_parrain');
    }

    // Relation avec Candidat
    public function candidat()
    {
        return $this->belongsTo(Candidat::class, 'id_candidat');
    }
}