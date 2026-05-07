<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOP 14 - Accueil</title>
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
            Le Top 14, c’est bien plus qu’un championnat : c’est l’âme du rugby français,
            entre passion, histoire et combats d’exception chaque week-end.
        </p>
    </header>
    
    <?php include_once 'menu.php'; ?>
    

    <main>
        <section>
            <h2>L'histoire du TOP 14</h2>
            <p>
                Le Top 14 est le championnat de rugby à XV le plus important en France. Créé en 1892, il était à
                l’origine une
                compétition amateur, dominée par quelques clubs historiques, avant de se développer fortement dans le
                sud-ouest
                du pays.

                Le rugby devient professionnel en 1995, ce qui transforme profondément le championnat. Depuis 2005, le
                Top 14
                réunit 14 équipes qui s’affrontent chaque saison, avec des phases finales entre les meilleures pour
                désigner le
                champion. Aujourd’hui, c’est l’un des championnats les plus compétitifs et prestigieux au monde.
            </p>
        </section>

        <section>
            <h2>Présentation visuelle</h2>

            <div class="carrousel">
                <button class="precedent">◀</button>

                <a href="image/presTOP14grande.webp" target="_blank">
                    <img src="image/presTOP14.webp" class="image-carrousel bordure" alt="Top 14">
                </a>

                <button class="suivant">▶</button>
            </div>
            <div class="points-carrousel">
                <span class="point actif"></span>
                <span class="point"></span>
                <span class="point"></span>
            </div>
        </section>

        <section>
            <h2>Lien utile</h2>
            <p>
                <a href="https://top14.lnr.fr/" target="_blank">Site officiel du TOP 14</a>
            </p>
        </section>
    </main>

    <footer>
        <p>Site réalisé par Théophile Petit </p>
    </footer>
    <script src="js/jquery-site.js"></script>

</body>

</html>