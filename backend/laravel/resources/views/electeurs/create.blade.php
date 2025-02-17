// resources/views/electeurs/create.blade.php
@extends('layouts.app')
@section('title', 'Ajouter un Électeur')
@section('content')
    <h1>Ajouter un Électeur</h1>
    <form action="{{ route('electeurs.store') }}" method="POST">//route('electeurs.store') permet de rediriger vers la route electeurs.store
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" required>//Champ obligatoire
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" required>//Champ obligatoire
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection