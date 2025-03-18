// resources/views/candidats/show.blade.php
@extends('layouts.app')
@section('title', 'Détails du Candidat')
@section('content')
    <h1>Détails du Candidat</h1>
    <p><strong>Nom :</strong> {{ $candidat->nom }}</p>
    <p><strong>Prénom :</strong> {{ $candidat->prenom }}</p>
    <p><strong>Email :</strong> {{ $candidat->email }}</p>
    <a href="{{ route('candidats.index') }}" class="btn btn-secondary">Retour à la liste</a>
@endsection