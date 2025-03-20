<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur la Plateforme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* 🌟 Styles généraux */
        body {
            background-color: #f4f7fc;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* 🔹 Barre de navigation */
        .navbar {
            background: linear-gradient(90deg, #1a1a2e, #16213e);
            padding: 15px;
        }

        .navbar-brand {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        /* 🎨 Conteneur principal */
        .container-main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            padding: 40px;
        }

        .container-title {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 2.5rem;
            color: #1a1a2e;
            font-weight: 600;
            margin-bottom: 10px;
        }

        p.lead {
            font-size: 1.2rem;
            color: #495057;
        }

        /* 🔲 Cartes interactives */
        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 280px;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            text-align: center;
            background: white;
            padding: 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #1a1a2e;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #1a1a2e;
        }

        .card-body p {
            color: #6c757d;
        }

        /* Boutons stylisés */
        .btn-custom {
            font-size: 1.1rem;
            font-weight: bold;
            padding: 12px;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0px 5px 15px rgba(0, 120, 255, 0.3);
        }

        .btn-primary {
            background: #0078ff;
            border: none;
        }

        .btn-success {
            background: #28a745;
            border: none;
        }

        .btn-info {
            background: #17a2b8;
            border: none;
        }

        /* 🌍 Pied de page */
        footer {
            background: linear-gradient(90deg, #1a1a2e, #16213e);
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

        .flag-icon {
            width: 50px;
            height: auto;
            margin-top: 10px;
        }

        /* 📱 Responsive Design */
        @media (max-width: 768px) {
            .card-container {
                flex-direction: column;
                align-items: center;
            }
            .card {
                width: 100%;
                max-width: 320px;
            }
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

    <!-- 🟦 Barre de navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Plateforme de Parrainage</a>
        </div>
    </nav>

    <!-- 🎯 Contenu Principal -->
    <div class="container container-main">
        <div class="container-title">
            <h1>Bienvenue</h1>
            <p class="lead">Sélectionnez l'espace auquel vous souhaitez accéder :</p>
        </div>

        <div class="card-container">
            <!-- 🏛 Espace DGE -->
            <div class="card" onclick="window.location.href='{{ route('dge.accueil') }}'">
                <i class="fa-solid fa-house"></i>
                <div class="card-body">
                    <h3 class="card-title">Espace DGE</h3>
                    <p>Accédez à l'administration et gestion du parrainage.</p>
                    <a href="{{ route('dge.accueil') }}" class="btn btn-primary btn-custom mt-3">Accéder</a>
                </div>
            </div>

            <!-- 🎩 Espace Candidat -->
            <div class="card" onclick="window.location.href='{{ route('candidat.accueil') }}'">
                <i class="fa-solid fa-user"></i>
                <div class="card-body">
                    <h3 class="card-title">Espace Candidat</h3>
                    <p>Gérez votre candidature et suivez vos parrainages.</p>
                    <a href="{{ route('candidat.accueil') }}" class="btn btn-success btn-custom mt-3">Accéder</a>
                </div>
            </div>

            <!-- 🗳️ Espace Électeur -->
            <div class="card" onclick="window.location.href='{{ route('electeur.accueil') }}'">
                <i class="fa-solid fa-id-card"></i>
                <div class="card-body">
                    <h3 class="card-title">Espace Électeur</h3>
                    <p>Inscrivez-vous et soutenez votre candidat préféré.</p>
                    <a href="{{ route('electeur.accueil') }}" class="btn btn-info btn-custom mt-3">Accéder</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 🔽 Footer -->
    <footer>
        <div class="footer-content">
            <img src="https://media.istockphoto.com/id/680713780/fr/photo/drapeau-du-s%C3%A9n%C3%A9gal.jpg?s=612x612&w=0&k=20&c=jaUoz0GYFsnK9RnNJdmQ-FXvSIvcw6Q_ewFQgS9AyIQ=" alt="Drapeau du Sénégal" class="flag-icon">
            <p class="mt-2">La gestion des parrainages au Sénégal - <strong>Un Peuple, Un But, Une Foi</strong></p>
            <p>&copy; <span id="current-year"></span> DGE - Parrainages</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Affichage de l'année courante dans le footer
        document.getElementById("current-year").innerText = new Date().getFullYear();
    </script>

</body>

</html>
