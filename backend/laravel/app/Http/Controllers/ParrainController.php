<?php

namespace App\Http\Controllers;

use App\Models\Parrain;
use Illuminate\Http\Request;

class ParrainController extends Controller
{
    public function index()
    {
        return response()->json(Parrain::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'electeur_id' => 'required|exists:electeurs,id|unique:parrains',
            'email' => 'required|email|unique:parrains',
            'telephone' => 'required|unique:parrains',
            'code_authentification' => 'required|unique:parrains',
        ]);

        $parrain = Parrain::create($request->all());
        return response()->json($parrain, 201);
    }
}
