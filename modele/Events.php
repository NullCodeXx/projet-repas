<?php

/*
 * Modele Class Evenement.
 */

/**
 * Description of Events
 *
 * @author solo
 */
class Events {
    private $name;
    private $type;
    private $lieu;
    private $date;
    private $prix;
    private $nombrePersonnes;
    private $description;
    private $image;
    
    //constructor.
    function __construct($name, $type, $lieu, $date, $prix, $nombrePersonnes, $description, $image) {
        $this->name = $name;
        $this->type = $type;
        $this->lieu = $lieu;
        $this->date = $date;
        $this->prix = $prix;
        $this->nombrePersonnes = $nombrePersonnes;
        $this->description = $description;
        $this->image = $image;
    }
    //getter.
    function getName() {
        return $this->name;
    }

    function getType() {
        return $this->type;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getDate() {
        return $this->date;
    }

    function getPrix() {
        return $this->prix;
    }

    function getNombrePersonnes() {
        return $this->nombrePersonnes;
    }

    function getDescription() {
        return $this->description;
    }
    
    function getImage() {
        return $this->image;
    }

    //Display.
    function displayEvent() {
        return '<div>' . $this->name . '</div>'. '<div>' . $this->type . '</div>'. '<div>' . $this->lieu . '</div>'
                . '<div>' . $this->date . '</div>'. '<div>' . $this->prix . '</div>' . '<div>' . 
                $this->nombrePersonnes . '</div>' .  '<div>' . $this->description . '</div>' . "<img src='".$this->image."'/>" . '<br />';
    }
}
