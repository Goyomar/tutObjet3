<?php

class Realisateur extends HumainCinema 
{

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom, $prenom, $sexe, $birth);
        
    }

    public function __toString(){
        return "La filmographie de ".parent::fullName()." est : ".implode(", ", $this->_films);
    }
}