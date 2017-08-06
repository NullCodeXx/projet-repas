<?php

//session_start();
/* DATA-BASE
 * On crée les functions de creations d'utilisateur, de recette, d'évenement.
 */

/**
 * Description of Database
 *
 * @author solo
 */
include_once "Users.php";

class Database {
    
    private $db;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=first_db', 'admin', 'simplon');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    //########## Crée un utilisateur ##########
    function creeUtilisateur(Users $user) {
        //Crée un dossier si il n'existe pas.
        if (!is_dir("../controler/utilisateurs")) {
            mkdir("../controler/utilisateurs");
        }
        //user->getPseudo() va chercher le pseudo que l'on a conserver.
        $new_file = fopen("../controler/utilisateurs/" . $user->getPseudo() . ".txt", "w");
        //Serialize transforme les données sous donné binaire pour en faire ce que l'on veut.
        fwrite($new_file, serialize($user));
        //Je referme mon fichier.
        fclose($new_file);
        return true;
    }

    //########## Lecture de l'utilisateur unserialize. ##########   
    function lireUtilisateur($user) {
        if (is_file('utilisateurs/' . $user . '.txt')) {
            return unserialize(file_get_contents('utilisateurs/' . $user . '.txt'));
        }
        return false;
    }

    //########## crée des evenements  ##########
    function creeEvents(Events $event) {
        //echo dateTime();
        if (!is_dir("../controler/events")) {
            mkdir("../controler/events");
        }
        //user->getPseudo() va chercher le pseudo que l'on a conserver.
        $new_event = fopen("../controler/events/" . $event->getName() . ".txt", "w");
        fwrite($new_event, serialize($event));
        fclose($new_event);
        return true;
    }
    
    //prend simplement les fichier et les place dans un tableau.
    function lireEvents() {
        //tab
        $array = [];
        $scan = scandir("../controler/events/");
        foreach($scan as $file) {
            if(!is_dir("../controler/events/" . $file)) {
                $contentEvent = unserialize(file_get_contents("../controler/events/" . $file));
                //Placer dans un a tab.
                $array[] = $contentEvent;
            }
        }
        return $array;
    }
}
