@extends('layouts.app')
@section('title', 'Tableau de bord')
@section('content')
    <h1>Bienvenue sur la plateforme de gestion des parrainages</h1>
    <p>Utilisez les menus pour gérer les électeurs, candidats et parrainages.</p>
@endsection

// resources/views/electeurs/index.blade.php
@extends('layouts.app')
@section('title', 'Liste des Électeurs')
@section('content')
    <h1>Liste des Électeurs</h1>
    <a href="{{ route('electeurs.create') }}" class="btn btn-primary">Ajouter un électeur</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($electeurs as $electeur)
                <tr>
                    <td>{{ $electeur->id }}</td>
                    <td>{{ $electeur->nom }}</td>
                    <td>{{ $electeur->prenom }}</td>
                    <td>
                        <a href="{{ route('electeurs.edit', $electeur->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('electeurs.destroy', $electeur->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection