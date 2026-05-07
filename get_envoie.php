<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fct Get</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

<header>
    <div class="titre-container">
        <h1>🏉 Au coeur du 14 🏉</h1>
        <img src="image/logo.webp" alt="Logo" class="logo">
    </div>

</header>

<?php include_once 'menu.php'; ?>


<main>
    <section>
        <h2>Page d'envoie</h2>

        <p>
            Cliquer sur ce lien pour l'envoie d'URL
        </p>

        <p>
            <a class="lien-tp" href="get_recoit.php?prenom=Gaston&amp;repeter=10">
                Envoyer les données
            </a>
        </p>
    </section>
</main>

<footer>
    <p>Site réalisé par Théophile Petit</p>
</footer>

</body>
</html>