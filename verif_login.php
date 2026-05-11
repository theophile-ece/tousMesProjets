<?php
session_start();
include("connexion_bdd.php");

if (!isset($_SESSION["tentatives"])) {
    $_SESSION["tentatives"] = 0;
}

if (isset($_POST["login"], $_POST["password"])) {

    $login = $_POST["login"];
    $password = $_POST["password"];

    $requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ?");
    $requete->execute(array($login));

    $utilisateur = $requete->fetch();

    if ($utilisateur && password_verify($password, $utilisateur["mot_de_passe"])) {
        $_SESSION["utilisateur"] = $utilisateur["prenom"] . " " . $utilisateur["nom"];
        $_SESSION["login"] = $utilisateur["login"];
        $_SESSION["tentatives"] = 0;
    } else {
        $_SESSION["tentatives"]++;

        if ($_SESSION["tentatives"] >= 3) {
            sleep(5);
            $_SESSION["tentatives"] = 0;
        }

        header("Location: login.php?erreur=1");
        exit();
    }

} else {
    header("Location: login.php?erreur=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion réussie</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

<header>
    <div class="titre-container">
        <h1>🏉 Au coeur du 14 🏉</h1>
        <img src="image/logo.webp" alt="Logo" class="logo">
    </div>

    <p class="intro">
        Vous êtes maintenant connecté.
    </p>
</header>

<?php include_once 'menu.php'; ?>

<main>
    <section>
        <h2>Connexion réussie</h2>

        <p class="succes-tp">
            Bonjour <?php echo htmlspecialchars($_SESSION["utilisateur"]); ?> !
        </p>

        <p>
            <a class="lien-tp" href="logout.php">Déconnexion</a>
        </p>
    </section>
</main>

<footer>
    <p>Site réalisé par Théophile Petit</p>
</footer>

</body>
</html>