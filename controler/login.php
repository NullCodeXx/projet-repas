<?php

/* RECUP CONNEXION.
 * Recuperation des inputs du formulaire de connexion (traitement)
 */
echo "<body style='background-color: black;color: lime;'>";
session_start();

include_once "../modele/Users.php";
include_once "../modele/Database.php";
$database = new Database();



if (isset($_POST["login"])) {
    $filter = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $pseudo = $filter["pseudo"];
    $mdp = md5($filter["mdp"]);

    $recupUser = $database->lireUtilisateur($pseudo);
    if ($recupUser) {
        $getMdp = $recupUser->getMdp();

        if ($getMdp == $mdp) {
            //la session remplacera le user.
            $_SESSION['utilisateur'] = $recupUser ;
            echo 'Bienvenue ' . $pseudo . " vous êtes maintenant authentifier ";
            echo "Redirection dans 3 seconde...";
            header("refresh:03;url=../vue/index.php");
        } else {
            echo "Veuillez réessayer, votre identifiant semble incorrect" . "<br />";
            echo "l'utilisateur : " . $pseudo . " n'apparait pas dans la base de données";
            //REFRESH
            header("refresh:02;url=../vue/login-form.php");
        }
    }
}
