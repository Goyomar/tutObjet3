<?php

class Role
{
    private string $_personnage;
    private array $_acteurs;

    public function __construct(string $personnage){
        $this->_personnage = $personnage;
        $this->_acteurs= [];
    }

    public function __toString(){
        if (count($this->_acteurs == 1)){
            return "L'acteur ayant incarnés ".$this->_personnage." est ".implode(", ", $this->_acteurs);
        } elseif (count($this->_acteurs > 1)){
            return "Les acteurs ayant incarnés ".$this->_personnage."  sont ".implode(", ", $this->_acteurs);
        } else {
            return "Ce rôle n'a pas été joué !";
        }
    }


    /**
     * Get the value of _personnage
     */ 
    public function get_personnage()
    {
        return $this->_personnage;
    }

    /**
     * Set the value of _personnage
     *
     * @return  self
     */ 
    public function set_personnage($_personnage)
    {
        $this->_personnage = $_personnage;

        return $this;
    }

    public function addActeur($newActeur){
        $this->_acteurs []= $newActeur;
    }
}