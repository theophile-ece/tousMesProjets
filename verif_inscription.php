<?php
include("connexion_bdd.php");

if (
    isset($_POST["nom"], $_POST["prenom"], $_POST["login"], $_POST["password"], $_POST["confirmation"]) &&
    !empty($_POST["nom"]) &&
    !empty($_POST["prenom"]) &&
    !empty($_POST["login"]) &&
    !empty($_POST["password"]) &&
    !empty($_POST["confirmation"])
) {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirmation = $_POST["confirmation"];

    if ($password !== $confirmation) {
        header("Location: inscription.php?erreur=mdp");
        exit();
    }
    $verification = $bdd->prepare("SELECT id FROM utilisateurs WHERE login = ?");
    $verification->execute(array($login));

    $utilisateur_existant = $verification->fetch();

    if ($utilisateur_existant) {
        header("Location: inscription.php?erreur=login");
        exit();
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $requete = $bdd->prepare(
        "INSERT INTO utilisateurs (nom, prenom, login, mot_de_passe)
         VALUES (?, ?, ?, ?)"
    );

    $requete->execute(array($nom, $prenom, $login, $password_hash));

    header("Location: login.php?inscription=ok");
    exit();

} else {
    header("Location: inscription.php?erreur=champs");
    exit();
}
?>