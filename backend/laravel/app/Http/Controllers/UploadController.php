<?php

namespace App\Http\Controllers;

use App\Models\HistoriqueUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = HistoriqueUpload::latest()->get();
        return view('uploads.index', compact('uploads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fichier' => 'required|mimes:csv,txt|max:2048',
            'empreinte_sha256' => 'required|string|size:64'
        ]);

        $file = $request->file('fichier');

        // 🔹 Calculer l’empreinte SHA-256 du fichier
        $calculatedHash = hash_file('sha256', $file->getPathname());

        // 🔹 Vérifier si l’empreinte correspond à celle fournie
        if ($calculatedHash !== $request->empreinte_sha256) {
            HistoriqueUpload::create([
                'utilisateur_id' => Auth::id(),
                'adresse_ip' => $request->ip(),
                'empreinte_sha256' => $calculatedHash,
                'status' => 'échec'
            ]);

            return back()->withErrors(['message' => 'Empreinte SHA-256 invalide. Fichier rejeté.']);
        }

        // 🔹 Stocker le fichier dans `storage/app/uploads`
        $filePath = $file->storeAs('uploads', time() . '_' . $file->getClientOriginalName());

        // 🔹 Enregistrer l'upload réussi
        HistoriqueUpload::create([
            'utilisateur_id' => Auth::id(),
            'adresse_ip' => $request->ip(),
            'empreinte_sha256' => $calculatedHash,
            'status' => 'succès'
        ]);

        return back()->with('success', 'Fichier importé et validé avec succès.');
    }
}
