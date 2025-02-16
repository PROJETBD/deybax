<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriqueUpload extends Model
{
    use HasFactory;

    protected $table = 'historique_uploads';

    protected $fillable = [
        'utilisateur_id',
        'date_upload',
        'adresse_ip',
        'empreinte_sha256',
        'status'
    ];

    public $timestamps = false;

    // Relation avec l'utilisateur (supposé être un agent DGE)
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }
}
