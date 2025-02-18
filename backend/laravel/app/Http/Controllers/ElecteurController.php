<?php

namespace App\Http\Controllers;

use App\Models\Electeur;
use Illuminate\Http\Request;

class ElecteurController extends Controller
{
    public function index()
    {
        return response()->json(Electeur::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero_cni' => 'required|unique:electeurs',
            'numero_electeur' => 'required|unique:electeurs',
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'sexe' => 'required|in:M,F',
            'bureau_vote' => 'required',
        ]);

        $electeur = Electeur::create($request->all());
        return response()->json($electeur, 201);
    }

    public function show($id)
    {
        return response()->json(Electeur::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $electeur = Electeur::findOrFail($id);
        $electeur->update($request->all());
        return response()->json($electeur);
    }

    public function destroy($id)
    {
        Electeur::findOrFail($id)->delete();
        return response()->json(['message' => 'Électeur supprimé avec succès']);
    }
}
