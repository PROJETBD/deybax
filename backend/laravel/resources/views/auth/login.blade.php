// resources/views/auth/login.blade.php
@extends('layouts.app')
@section('title', 'Connexion')
@section('content')
    <h1>Connexion</h1>
    <form action="{{ route('login') }}" method="POST">//route('login') permet de rediriger vers la route login
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>//Champ obligatoire
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" required>//Champ obligatoire
        </div>
        <button type="submit" class="btn btn-success">Se connecter</button>
    </form>
@endsection