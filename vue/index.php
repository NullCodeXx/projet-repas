<?php
//cho "<body style='background-color: black;color: lime;'>";
//Page d'index (display).
include_once "../modele/Database.php";
include_once "../modele/Users.php";
include_once "../modele/Events.php";



session_start();
if(isset($_SESSION["utilisateur"])) {
    $utilisateur = $_SESSION["utilisateur"];
    echo "Bienvenus " . $utilisateur->getPseudo();
    echo $utilisateur->getDateSign()->format('Y-m-d H:i:s');
    echo "<form method='POST' action='../controler/logout.php'>";
    echo "<input type='submit' name='logout' value='Se déconnecter'>";
    echo "</form>";
}

echo "<h1>Index</h1>
<p>Vous n'êtes pas encore inscrit? ne perdez plus de temps <a href='sign-form.php' title='Vous inscrire'>Inscrivez-vous</a> !</p>
<p>Les membres c'est par ici, <a href='login-form.php' title='Vous connecter'>Connectez vous</a> !</p>
<p>Pour ajouter un évenement ou des évenements si vous êtes mega motivées, c'est par  <a href='event-form.php' title='Ajouter un évenement'>ici</a> !</p>";


//Display
$dataEvent = new DataBase();
$events = $dataEvent->lireEvents();
foreach($events as $event) {
    echo "<form action='#' method='POST'>";
    echo $event->displayEvent();
    echo "<input type='submit' name='edit' Value='Modifier'/>";
    echo "<input type='submit' name='delete' Value='Supprimer'/>";
}
?>