<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElecteursErreurs extends Model
{
    use HasFactory;

    protected $table = 'electeurs_erreurs';

    protected $fillable = [
        'numero_carte_electeur',
        'numero_cni',
        'nom_famille',
        'prenom',
        'bureau_vote',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'nature_erreur',
        'description_erreur',
        'tentative_upload_id',
    ];

    protected $casts = [
        'date_naissance' => 'date',
        'sexe' => 'string',
    ];

    public function historiqueUpload()
    {
        return $this->belongsTo(HistoriqueUpload::class, 'tentative_upload_id');
    }
}