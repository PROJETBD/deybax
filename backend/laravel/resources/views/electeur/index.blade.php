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
                        <a href="{{ route('electeurs.edit', $electeur->id) }}" class="btn btn-warning">Modifier</a>//route('electeurs.edit', $electeur->id) permet de rediriger vers la route electeurs.edit
                        <button class="btn btn-danger delete-btn" data-id="{{ $electeur->id }}">Supprimer</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                let id = this.dataset.id;
                fetch(/electeurs/${id}, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content//Récupérer le token CSRF
                    }
                }).then(response => response.json())//Convertir la réponse en JSON
                  .then(data => alert(data.message));//Afficher un message d'alerte
            });
        });
    </script>
@endsection
