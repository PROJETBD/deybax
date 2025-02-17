@extends('layouts.app')

@section('title', 'Importer un Fichier')

@section('content')
<h2>Importer un Fichier CSV</h2>
<form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Fichier :</label>
    <input type="file" name="fichier" required>

    <label>Empreinte SHA-256 :</label>
    <input type="text" name="empreinte_sha256" required placeholder="Coller l'empreinte SHA-256 ici">

    <button type="submit">Importer</button>
</form>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if($errors->any())
    <p style="color: red;">{{ $errors->first() }}</p>
@endif

<h3>Historique des Imports</h3>
<table>
    <tr>
        <th>Nom du fichier</th>
        <th>Empreinte SHA-256</th>
        <th>Statut</th>
    </tr>
    @foreach ($uploads as $upload)
    <tr>
        <td>Fichier Importé</td>
        <td>{{ $upload->empreinte_sha256 }}</td>
        <td>{{ $upload->status }}</td>
    </tr>
    @endforeach
</table>
@endsection
