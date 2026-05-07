<?php
session_start();

$langue = "fr";

if (isset($_COOKIE["langue"])) {
    $langue = $_COOKIE["langue"];
}

if (isset($_GET["langue"])) {
    $langue = htmlspecialchars($_GET["langue"]);
    setcookie("langue", $langue, time() + 365 * 24 * 3600, "/", "", false, true);
}

$textes = [
    "fr" => [
        "titre" => "Connexion",
        "bienvenue" => "Bienvenue sur la page de connexion.",
        "login" => "Login :",
        "password" => "Mot de passe :",
        "bouton" => "Vérifier",
        "erreur" => "Login ou mot de passe incorrect.",
        "tentatives" => "Nombre de tentatives :",
        "connecte" => "Vous êtes connecté en tant que",
        "deconnexion" => "Déconnexion"
    ],
    "en" => [
        "titre" => "Login",
        "bienvenue" => "Welcome to the login page.",
        "login" => "Username:",
        "password" => "Password:",
        "bouton" => "Check",
        "erreur" => "Wrong username or password.",
        "tentatives" => "Number of attempts:",
        "connecte" => "You are logged in as",
        "deconnexion" => "Logout"
    ]
];

if (!isset($textes[$langue])) {
    $langue = "fr";
}

if (!isset($_SESSION["tentatives"])) {
    $_SESSION["tentatives"] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP10 - Connexion</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

<header>
    <div class="titre-container">
        <h1>🏉 Au coeur du 14 🏉</h1>
        <img src="image/logo.webp" alt="Logo" class="logo">
    </div>

    <p class="intro">TP10 : sessions et cookies</p>
</header>

<?php include_once 'menu.php'; ?>

<main>
    <section class="bloc-login">

        <h2><?php echo $textes[$langue]["titre"]; ?></h2>

        <p class="message-langue">
            <?php echo $textes[$langue]["bienvenue"]; ?>
        </p>

        <div class="choix-langue">
            <a href="login.php?langue=fr">FR Français</a>
            <span>|</span>
            <a href="login.php?langue=en">GB English</a>
        </div>

        <?php if (isset($_SESSION["utilisateur"])) { ?>

            <div class="connecte-tp">
                <?php echo $textes[$langue]["connecte"]; ?>
                <strong><?php echo htmlspecialchars($_SESSION["utilisateur"]); ?></strong>
            </div>

            <p class="zone-deconnexion">
                <a class="lien-tp" href="logout.php">
                    <?php echo $textes[$langue]["deconnexion"]; ?>
                </a>
            </p>

        <?php } else { ?>

            <?php
            if (isset($_GET["erreur"])) {
                echo '<p class="erreur-tp">' . $textes[$langue]["erreur"] . '</p>';
            }
            ?>

            <p class="tentatives-tp">
                <?php echo $textes[$langue]["tentatives"] . " " . $_SESSION["tentatives"]; ?>
            </p>

            <form class="formulaire-login" method="post" action="verif_login.php">

                <div class="champ-login">
                    <label for="login"><?php echo $textes[$langue]["login"]; ?></label>
                    <input type="text" name="login" id="login" required>
                </div>

                <div class="champ-login">
                    <label for="password"><?php echo $textes[$langue]["password"]; ?></label>
                    <input type="password" name="password" id="password" required>
                </div>

                <input class="bouton-login" type="submit" value="<?php echo $textes[$langue]["bouton"]; ?>">

            </form>

        <?php } ?>

    </section>
</main>

<footer>
    <p>Site réalisé par Théophile Petit</p>
</footer>

</body>
</html>