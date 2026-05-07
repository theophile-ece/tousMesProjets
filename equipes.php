<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandes équipes</title>
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
            Depuis la création du championnat, certains clubs se sont imposés comme des légendes
            grâce à leurs titres, leur histoire et leurs joueurs d'exception.
        </p>
    </header>

    <?php include_once 'menu.php'; ?>
    

    <main>
        <section>
            <h2>Stade Toulousain</h2>
            <p><strong>Fondé en :</strong> 1907 — <strong>Titres de champion de France :</strong> 22</p>
            <p>
                Le club le plus titré du rugby français. Toulouse est une véritable machine à gagner,
                connue pour son jeu de mouvement et sa formation de talents. Le Stade Ernest-Wallon
                est l'un des stades les plus animés du pays.
            </p>
            <p><strong>Joueurs emblématiques :</strong> Fabien Pelous, Clément Poitrenaud, Yoann Huget, Antoine Dupont
            </p>
            <p><a href="https://www.stadetoulousain.fr/" target="_blank">Site officiel</a></p>
        </section>

        <section>
            <h2>RC Toulon</h2>
            <p><strong>Fondé en :</strong> 1908 — <strong>Titres de champion de France :</strong> 3</p>
            <p>
                Le RCT a dominé le rugby européen au début des années 2010 en remportant trois
                Coupes d'Europe consécutives (2013, 2014, 2015). Le club est connu pour avoir
                attiré les plus grandes stars mondiales au Stade Mayol.
            </p>
            <p><strong>Joueurs emblématiques :</strong> Jonah Lomu, Jonny Wilkinson, Bryan Habana, Juan Martín Hernández
            </p>
            <p><a href="https://rctoulon.com/" target="_blank">Site officiel</a></p>
        </section>

        <section>
            <h2>ASM Clermont</h2>
            <p><strong>Fondé en :</strong> 1911 — <strong>Titres de champion de France :</strong> 2</p>
            <p>
                L'ASM est célèbre pour ses supporters — la "Horde Noire" — qui créent une
                atmosphère unique au Michelin. Finaliste de nombreuses fois en Europe et en
                championnat, Clermont incarne la constance et la passion du rugby.
            </p>
            <p><strong>Joueurs emblématiques :</strong> Aurélien Rougerie, Morgan Parra, Florian Vialelle</p>
            <p><a href="https://www.asm-rugby.com/" target="_blank">Site officiel</a></p>
        </section>

        <section>
            <h2>Union Bordeaux-Bègles</h2>
            <p><strong>Fondé en :</strong> 2006 — <strong>Titres de champion de France :</strong> 0</p>
            <p>
                Club en pleine ascension, l'UBB s'est installé dans le top du championnat ces
                dernières années. Finaliste du Top 14 en 2024, le club attire de grands joueurs
                internationaux et séduit de plus en plus de supporters.
            </p>
            <p><strong>Joueurs emblématiques :</strong> Maxime Lucu, Cameron Woki, Matthieu Jalibert</p>
            <p><a href="https://www.ubbrugby.com/" target="_blank">Site officiel</a></p>
        </section>

        <section>
            <h2>Castres Olympique</h2>
            <p><strong>Fondé en :</strong> 1906 — <strong>Titres de champion de France :</strong> 4</p>
            <p>
                Castres est un club qui surprend toujours. Petit budget, grande ambition :
                le CO a réussi à décrocher plusieurs titres face à des clubs bien mieux dotés,
                grâce à un état d'esprit combatif et une grande solidarité.
            </p>
            <p><strong>Joueurs emblématiques :</strong> Rory Kockott, Rodrigo Capo Ortega, Yannick Caballero</p>
            <p><a href="https://castres-olympique.com/" target="_blank">Site officiel</a></p>
        </section>

        <section>
            <h2>Aviron Bayonnais</h2>
            <p><strong>Fondé en :</strong> 1904 — <strong>Titres de champion de France :</strong> 2</p>
            <p>
                Club historique du Pays Basque, Bayonne est l'un des clubs les plus populaires
                du rugby français. Le stade Jean-Dauger est réputé pour sa ferveur et l'ambiance
                basque incomparable que les supporters y apportent.
            </p>
            <p><strong>Joueurs emblématiques :</strong> Imanol Harinordoquy, Serge Blanco, Pierre Berbizier</p>
            <p><a href="https://www.abrugby.fr/" target="_blank">Site officiel</a></p>
        </section>

        <section>
            <h2>Le saviez-vous ?</h2>
            <p>
                Le Stade Toulousain est le club le plus titré d'Europe en Coupe d'Europe avec
                6 trophées. Antoine Dupont, demi de mêlée toulousain, est considéré comme
                le meilleur joueur du monde depuis 2021.
            </p>
            <p>
                Le match entre Toulouse et Clermont est souvent surnommé le <strong>"choc des titans"</strong>
                du rugby français, tant les deux clubs ont dominé le championnat ces 20 dernières années.
            </p>
        </section>
    </main>

    <footer>
        <p>Site réalisé par Théophile Petit</p>
    </footer>
    <script src="js/jquery-site.js"></script>

</body>

</html>