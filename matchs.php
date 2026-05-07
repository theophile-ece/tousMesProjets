<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matchs à suivre</title>
    <link rel="stylesheet" href="style/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <header>
        <div class="titre-container">
            <h1>🏉 Au coeur du 14 🏉</h1>
            <img src="image/logo.webp" alt="Logo" class="logo">
        </div>
        <p class="intro">
            Retrouve ici les prochaines affiches du TOP 14 avec la date, l’heure et le stade.
        </p>
    </header>

    <?php include_once 'menu.php'; ?>

    

    <main class="matchs-wrapper">
        <section class="matchs-controls">
            <h2>Prochains matchs</h2>
            <input type="text" id="search-match" placeholder="Rechercher une équipe ou un lieu...">
        </section>

        <div class="matchs-page" id="matchs-container">
        </div>
    </main>

    <footer>
        <p>Site réalisé par Théophile Petit</p>
    </footer>

    <script src="js/matchs.js"></script>
    <script src="js/jquery-site.js"></script>
</body>

</html>