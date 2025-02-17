// resources/views/parrainages/create.blade.php
@extends('layouts.app')
@section('title', 'Parrainer un candidat')
@section('content')
    <h1>Parrainer un candidat</h1>
    <form action="{{ route('parrainages.store') }}" method="POST">//route('parrainages.store') permet de rediriger vers la route parrainages.store
        @csrf
        <div class="mb-3">
            <label for="candidat_id" class="form-label">Sélectionner un candidat</label>
            <select name="candidat_id" class="form-control" required>
                @foreach($candidats as $candidat)
                    <option value="{{ $candidat->id }}">{{ $candidat->nom }} {{ $candidat->prenom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Parrainer</button>
    </form>
@endsection