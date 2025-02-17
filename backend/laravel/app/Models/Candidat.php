<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $table = 'candidats';

    protected $fillable = [
        'electeur_id',
        'nom_parti',
        'slogan',
        'photo',
        'couleurs',
        'url_info',
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
