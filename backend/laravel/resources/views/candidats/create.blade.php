// resources/views/candidats/create.blade.php
@extends('layouts.app')
@section('title', 'Ajouter un Candidat')
@section('content')
    <h1>Ajouter un Candidat</h1>
    <form action="{{ route('candidats.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
@endsection


