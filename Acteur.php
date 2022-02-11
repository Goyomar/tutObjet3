<?php

Class Acteur extends HumainCinema
{
    private array $_roles;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        parent::__construct($nom, $prenom, $sexe, $birth);
        $this->_roles = [];
    }

    public function addRole(string $newRole){
        $this->_films []= $newRole;
    }

    public function __toString(){
        return "La filmographie de ".parent::fullName()." est : ".implode(", ", $this->_films);
    }
}