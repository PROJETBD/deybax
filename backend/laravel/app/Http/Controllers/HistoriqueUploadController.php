<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoriqueUpload;

class HistoriqueUploadController extends Controller
{
    public function index()
    {
        return response()->json(HistoriqueUpload::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'utilisateur_id' => 'required|exists:users,id',
            'adresse_ip' => 'required|ip',
            'empreinte_sha256' => 'required|size:64',
            'status' => 'required|in:succès,échec'
        ]);

        $upload = HistoriqueUpload::create($request->all());

        return response()->json($upload, 201);
    }

    public function show($id)
    {
        return response()->json(HistoriqueUpload::findOrFail($id));
    }
}