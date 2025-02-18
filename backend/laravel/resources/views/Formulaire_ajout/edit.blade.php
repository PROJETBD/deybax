@extends('layouts.app')
@section('title', 'Modifier un Électeur')
@section('content')
    <h1>Modifier un Électeur</h1>
    <form action="{{ route('electeurs.update', $electeur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" value="{{ $electeur->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" value="{{ $electeur->prenom }}" required>
        </div>
        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
@endsection



