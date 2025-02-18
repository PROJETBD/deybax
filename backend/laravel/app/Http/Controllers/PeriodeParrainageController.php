<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeriodeParrainage;

class PeriodeParrainageController extends Controller
{
    public function index()
    {
        return response()->json(PeriodeParrainage::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'etat' => 'required|in:ouverte,fermée'
        ]);

        $periode = PeriodeParrainage::create($request->all());

        return response()->json($periode, 201);
    }

    public function ouvrirParrainage()
    {
        PeriodeParrainage::where('etat', 'fermée')->update(['etat' => 'ouverte']);
        return response()->json(['message' => 'Parrainage ouvert']);
    }

    public function fermerParrainage()
    {
        PeriodeParrainage::where('etat', 'ouverte')->update(['etat' => 'fermée']);
        return response()->json(['message' => 'Parrainage fermé']);
    }
}
