<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function index()
    {
        return response()->json(Candidat::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'electeur_id' => 'required|exists:electeurs,id|unique:candidats',
            'nom_parti' => 'nullable|string',
            'slogan' => 'nullable|string',
            'photo' => 'nullable|string',
            'couleurs' => 'nullable|string',
            'url_info' => 'nullable|string',
        ]);

        $candidat = Candidat::create($request->all());
        return response()->json($candidat, 201);
    }
}
