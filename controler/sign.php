<?php

/* RECUP TRAITEMENT.
 * Recuperation des inputs du formulaire inscription (traitement).
 */
echo "<body style='background-color: black;color: lime;'>";
session_start();
include_once "../modele/Database.php";
include_once "../modele/Users.php";

//VERIFIE SI SA EXISTE.
if (isset($_POST["inscription"])) {
//FILTRE.
$filter = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
//INSTANCY DATABASE.
$creeUsers = new DataBase();
//UTILISE LA FUNCTIONDE DE DATABASE ET LUI AJOUTE UNE iNSTANCE, DE LA RECUP, UN FILTRE INPUT, UN MDP CRYPTER.

$utilisateur = new Users($filter["pseudo"], md5($filter["mdp"]));
$creeUsers->creeUtilisateur($utilisateur);
//CONSERVE LE PSEUDO.
$_SESSION["utilisateur"] = $utilisateur;

//COMMENTAIRE.
echo "Bravo votre compte a été crée <br />";
echo "Redirection dans 5 seconde" . "<br />";
//REFRESH
header("refresh:05;url=../vue/index.php");
}else {
    echo "error votre compte n'as pas pus être crée, veuillez signaler cette imprévus au service de dévelloppement "
    . "<a href='mailto:code-db_@outlook.fr'>Cliquer ici</a>";
}
