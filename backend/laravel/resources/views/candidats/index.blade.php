// resources/views/candidats/index.blade.php
@extends('layouts.app')
@section('title', 'Liste des Candidats')
@section('content')
    <h1>Liste des Candidats</h1>
    <a href="{{ route('candidats.create') }}" class="btn btn-primary">Ajouter un candidat</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidats as $candidat)
                <tr>
                    <td>{{ $candidat->id }}</td>
                    <td>{{ $candidat->nom }}</td>
                    <td>{{ $candidat->prenom }}</td>
                    <td>{{ $candidat->email }}</td>
                    <td>
                        <a href="{{ route('candidats.show', $candidat->id) }}" class="btn btn-info">Voir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
