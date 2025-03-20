<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestion Parrainage - Électeur')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            color: white;
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: white;
        }
        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            margin-top: auto;
        }
        /* Ensuring the footer stays at the bottom */
        .main-wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
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

    <!-- 🟦 Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('electeur.dashboard') }}">📋 Gestion Parrainage</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(session()->has('electeur_id'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('electeur.dashboard') }}">🏠 Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('electeur.logout') }}"method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">🚪 Déconnexion</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('electeur.login') }}">🔑 Connexion</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- 🏗 Contenu des pages -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <img src="https://media.istockphoto.com/id/680713780/fr/photo/drapeau-du-s%C3%A9n%C3%A9gal.jpg?s=612x612&w=0&k=20&c=jaUoz0GYFsnK9RnNJdmQ-FXvSIvcw6Q_ewFQgS9AyIQ=" alt="Drapeau du Sénégal" class="flag-icon">
            <p class="mt-2">La Gestion des Parrainages au Sénégal - <strong>Un Peuple, Un But, Une Foi</strong></p>
            <p>&copy; <span id="current-year"></span> DGE - Parrainages</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Affichage de l'année courante dans le footer
        document.getElementById("current-year").innerText = new Date().getFullYear();
    </script>

    <!-- Bootstrap JS -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>