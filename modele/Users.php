<?php

/*  MODELE.
 * Class Users
 */

/**
 * Description of Users
 *
 * @author solo
 */

class Users{
   private $pseudo;
    private $mdp;
    private $dateSign;
    private $dateLog;
    
    function __construct($pseudo, $mdp) {
        $this->pseudo = $pseudo;
        $this->mdp = $mdp;
        $this->dateSign = new DateTime();
        $this->dateLog = new DateTime();
    }
    
    function getPseudo() {
        return $this->pseudo;
    }

    function getMdp() {
        return $this->mdp;
    }
    function getDateSign() {
        return $this->dateSign;
    }
    
    function getDateLog() {
        return $this->dateLog;
    }
}
