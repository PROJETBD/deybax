@extends('layouts.app')
@section('title', 'Tableau de bord')
@section('content')
    <h1>Bienvenue sur la plateforme de gestion des parrainages</h1>
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
