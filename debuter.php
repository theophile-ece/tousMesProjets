<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment débuter ?</title>
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
            Le rugby est un sport magnifique accessible à tous.
            Voici tout ce qu'il faut savoir pour se lancer !
        </p>
    </header>

    <?php include_once 'menu.php'; ?>
    

    <main>

        <section class="accordeon">
            <h2 class="titre-accordeon">Comment rejoindre un club ?</h2>

            <div class="contenu-accordeon">
                <p>
                    Pour commencer le rugby, la première étape est de trouver un club près de chez toi.
                    En France, il existe plus de 1 800 clubs affiliés à la FFR
                    (Fédération Française de Rugby).
                </p>

                <p>
                    Tu peux trouver un club sur le site de la FFR en indiquant ta ville.
                    Une fois inscrit, tu rejoins un groupe d'entraînement selon ton âge
                    et ton niveau. Aucune expérience n'est requise !
                </p>

                <p>
                    <a href="https://www.ffr.fr/pratique/trouver-un-club" target="_blank">
                        Trouver un club FFR
                    </a>
                </p>
            </div>
        </section>

        <section class="accordeon">
            <h2 class="titre-accordeon">L'équipement nécessaire</h2>

            <div class="contenu-accordeon">
                <p>
                    Pour débuter, l'équipement de base est simple et peu coûteux :
                </p>

                <ul>
                    <li><strong>Crampons</strong> : indispensables pour accrocher le terrain</li>
                    <li><strong>Short et maillot</strong> : généralement fournis par le club</li>
                    <li><strong>Protège-dents</strong> : fortement recommandé dès le premier entraînement</li>
                    <li><strong>Casque de mêlée</strong> : optionnel mais utile pour les avants</li>
                </ul>
            </div>
        </section>

        <section class="accordeon">
            <h2 class="titre-accordeon">Les postes du rugby</h2>

            <div class="contenu-accordeon">
                <p>
                    Une équipe de rugby compte 15 joueurs répartis en deux groupes :
                    les <strong>avants</strong> (n°1 à 8)
                    et les <strong>arrières</strong> (n°9 à 15).
                </p>

                <ul>
                    <li><strong>Les avants</strong> : joueurs robustes qui gagnent le ballon</li>
                    <li><strong>Les demis</strong> : ils organisent les attaques</li>
                    <li><strong>Les trois-quarts</strong> : rapides, ils finissent les actions</li>
                    <li><strong>L'arrière</strong> : dernier rempart défensif</li>
                </ul>

                <p>
                    Peu importe ton gabarit, il existe un poste fait pour toi !
                </p>
            </div>
        </section>

        <section class="accordeon">
            <h2 class="titre-accordeon">Les règles de base</h2>

            <div class="contenu-accordeon">
                <ul>
                    <li>On ne peut passer le ballon qu'en arrière</li>
                    <li>Pour marquer un essai, il faut aplatir le ballon</li>
                    <li>Transformation après l’essai : 2 points</li>
                    <li>Pénalité ou drop : 3 points</li>
                    <li>Le jeu s'arrête sur les en-avant</li>
                </ul>
            </div>
        </section>

        <section class="accordeon">
            <h2 class="titre-accordeon">Les valeurs du rugby</h2>

            <div class="contenu-accordeon">
                <p>
                    Le rugby repose sur des valeurs fondamentales :
                    le respect, la solidarité, l'engagement
                    et le dépassement de soi.
                </p>

                <p>
                    C’est ce qui fait du rugby une grande famille.
                </p>
            </div>
        </section>

    </main>

    <footer>
        <p>Site réalisé par Théophile Petit</p>
    </footer>

    <script src="js/jquery-site.js"></script>

</body>
</html>