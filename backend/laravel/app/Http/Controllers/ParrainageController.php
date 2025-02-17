<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parrainage;

class ParrainageController extends Controller
{
    public function index()
    {
        return response()->json(Parrainage::with(['parrain', 'candidat'])->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_parrain' => 'required|exists:parrains,id_parrain',
            'id_candidat' => 'required|exists:candidats,id_candidat',
            'code_validation' => 'required|unique:parrainages,code_validation'
        ]);

        $parrainage = Parrainage::create($request->all());

        return response()->json($parrainage, 201);
    }

    public function show($id)
    {
        return response()->json(Parrainage::with(['parrain', 'candidat'])->findOrFail($id));
    }

    public function destroy($id)
    {
        Parrainage::findOrFail($id)->delete();
        return response()->json(['message' => 'Parrainage supprimé']);
    }
}