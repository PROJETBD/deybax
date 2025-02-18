@extends('layouts.app')
@section('title', 'Accueil des Parrains')
@section('content')
    <h1>Bienvenue sur la page des Parrains</h1>
    <p>Vous pouvez ici parrainer un candidat et suivre vos parrainages.</p>
    <a href="{{ route('parrainages.create') }}" class="btn btn-primary">Parrainer un candidat</a>
    <h2 class="mt-4">Statistiques des parrainages</h2>
    <canvas id="parrainageChart"></canvas>
    <script>
        const ctx = document.getElementById('parrainageChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Candidat A', 'Candidat B'],
                datasets: [{
                    label: 'Nombre de Parrainages',
                    data: [50, 30],
                    backgroundColor: ['blue', 'red']
                }]
            }
        });
    </script>
@endsection