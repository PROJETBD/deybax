<?php

namespace App\Http\Controllers;

use App\Models\ElecteurTemp;
use Illuminate\Http\Request;

class ElecteurTempController extends Controller
{
    public function index()
    {
        return response()->json(ElecteurTemp::all());
    }

    public function validateElecteur($id)
    {
        $electeur = ElecteurTemp::findOrFail($id);
        $electeur->update(['status_validation' => 'validé']);
        return response()->json(['message' => 'Électeur validé avec succès']);
    }

    public function rejectElecteur($id)
    {
        $electeur = ElecteurTemp::findOrFail($id);
        $electeur->update(['status_validation' => 'rejeté']);
        return response()->json(['message' => 'Électeur rejeté']);
    }
}
