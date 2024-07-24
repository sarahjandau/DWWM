<?php 
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Toute l'actualité du Water-Polo pour les Jeux Olympiques de Paris 2024</title>
</head>
<body>
    <header>
        <nav class="menuPrincipal">
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../public/equipes.php">Equipes</a></li>
                <li><a href="../public/joueurs.php">Joueurs</a></li>
                <li><a href="../public/match.php">Match</a></li>
                <li><a href="../public/login.php">Se connecter</a></li>

            </ul>
        </nav>

        <nav class="menuburger">
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="../public/equipes.php">Equipes</a></li>
                <li><a href="../public/joueurs.php">Joueurs</a></li>
                <li><a href="../public/match.php">Match</a></li>
                <li><a href="../public/login.php">Se connecter</a></li>

            </ul>
        </nav>


        <div class="header-content">
            <div class="logo"></div>
            <h1>WATER POLO<br>JEUX OLYMPIQUES<br>PARIS 2024!</h1>
        </div>
    </header>
    <main>
        <?= $content ?>
    </main>


    <footer>
        <p class="footer">Copyright AFCI - 2024</p>
    </footer>
    
</body>
</html>