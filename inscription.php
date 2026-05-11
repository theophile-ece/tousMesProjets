<?php
session_start();

$langue = "fr";

if (isset($_COOKIE["langue"])) {
    $langue = $_COOKIE["langue"];
}

$textes = [
    "fr" => [
        "titre" => "Inscription",
        "intro" => "Créez votre compte pour vous connecter au site.",
        "nom" => "Nom :",
        "prenom" => "Prénom :",
        "login" => "Login :",
        "password" => "Mot de passe :",
        "confirmation" => "Confirmation du mot de passe :",
        "bouton" => "S'inscrire",
        "deja" => "Déjà inscrit ?",
        "connexion" => "Se connecter"
    ],
    "en" => [
        "titre" => "Registration",
        "intro" => "Create your account to log in to the website.",
        "nom" => "Last name:",
        "prenom" => "First name:",
        "login" => "Username:",
        "password" => "Password:",
        "confirmation" => "Confirm password:",
        "bouton" => "Register",
        "deja" => "Already registered?",
        "connexion" => "Log in"
    ]
];

if (!isset($textes[$langue])) {
    $langue = "fr";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style/styles.css">
</head>

<body>

<header>
    <div class="titre-container">
        <h1>🏉 Au coeur du 14 🏉</h1>
        <img src="image/logo.webp" alt="Logo" class="logo">
    </div>

    <p class="intro">Inscrit toi !!!</p>
</header>

<?php include_once 'menu.php'; ?>

<main>
    <section class="bloc-login">

        <h2><?php echo $textes[$langue]["titre"]; ?></h2>

        <p class="message-langue">
            <?php echo $textes[$langue]["intro"]; ?>
        </p>
<?php
if (isset($_GET["erreur"])) {

    if ($_GET["erreur"] == "login") {
        echo '<p class="erreur-tp">Ce login existe déjà.</p>';
    }

    if ($_GET["erreur"] == "mdp") {
        echo '<p class="erreur-tp">Les mots de passe sont différents.</p>';
    }

    if ($_GET["erreur"] == "champs") {
        echo '<p class="erreur-tp">Veuillez remplir tous les champs.</p>';
    }
}
?>
        <form class="formulaire-login" method="post" action="verif_inscription.php">

            <div class="champ-login">
                <label for="nom"><?php echo $textes[$langue]["nom"]; ?></label>
                <input type="text" name="nom" id="nom" required>
            </div>

            <div class="champ-login">
                <label for="prenom"><?php echo $textes[$langue]["prenom"]; ?></label>
                <input type="text" name="prenom" id="prenom" required>
            </div>

            <div class="champ-login">
                <label for="login"><?php echo $textes[$langue]["login"]; ?></label>
                <input type="text" name="login" id="login" required>
            </div>

            <div class="champ-login">
                <label for="password"><?php echo $textes[$langue]["password"]; ?></label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="champ-login">
                <label for="confirmation"><?php echo $textes[$langue]["confirmation"]; ?></label>
                <input type="password" name="confirmation" id="confirmation" required>
            </div>

            <input class="bouton-login" type="submit" value="<?php echo $textes[$langue]["bouton"]; ?>">

        </form>

        <p class="zone-inscription">
            <?php echo $textes[$langue]["deja"]; ?>
            <a class="lien-tp" href="login.php">
                <?php echo $textes[$langue]["connexion"]; ?>
            </a>
        </p>

    </section>
</main>

<footer>
    <p>Site réalisé par Théophile Petit</p>
</footer>

</body>
</html>