@extends('layouts.dge')

@section('content')
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - DGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .card {
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 0 15px rgba(56, 169, 56, 0.1);
            width: 100%;
            max-width: 400px;
            align-content: center;
            box-sizing: content-box;
        }
        h3 {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 10px;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px;
            border-radius: 30px;
            font-size: 18px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .alert {
            font-size: 1rem;
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .flag-icon {
            width: 40px;
            height: auto;
        }
        .footer-content {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3>Connexion</h3>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('user.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <div class="text-center mt-3">
            <a href="{{ route('dge.register') }}">Pas de Compte ? Créer un compte</a>
        </div>
    </div>


</html>
@endsection