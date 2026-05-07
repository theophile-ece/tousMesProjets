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
        <h2>Page de réception</h2>

        <?php
        if (isset($_GET['prenom'], $_GET['repeter'])) {

            $prenom = htmlspecialchars($_GET['prenom']);
            $repeter = (int) $_GET['repeter'];

            if ($prenom != "" && $repeter >= 1 && $repeter <= 100) {

                $double = $repeter * 2;

                echo '<div class="liste-bonjour">';

                for ($i = 0; $i < $double; $i++) {
                    echo '<p>Bonjour ' . $prenom . ' !</p>';
                }

                echo '</div>';

            } else {
                echo '<p class="erreur-tp">Erreur : le prénom ne doit pas être vide et le nombre doit être entre 1 et 100.</p>';
            }

        } else {
            echo '<p class="erreur-tp">Erreur : les variables prenom et repeter sont manquantes dans l’URL.</p>';
        }
        ?>

        <p>
            <a class="lien-tp" href="get_envoie.php">Retour à la page d’envoi</a>
        </p>
    </section>
</main>

<footer>
    <p>Site réalisé par Théophile Petit</p>
</footer>

</body>
</html>