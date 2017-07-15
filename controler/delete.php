<?php

/* 
 * Delete file
 */

if (isset($_POST["event"])) {
    $post = $_POST["event"];
    $valider = unlink("events/" . $post);
    if($valider) {
        echo "L'\événement a été supprimer" . "<br/";
        echo "Redirection dans 3 seconde";
        echo header("refresh:03;url=../vue/index.php");
    }else {
        echo "L'\événement n'as pas été supprimer, ça pose un problème, veuillez nous en excusez";
    }
}
?>