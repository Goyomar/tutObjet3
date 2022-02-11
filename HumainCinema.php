<?php

abstract Class HumainCinema
{
    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe; // BOOLEAN ?
    protected $_birth;
    protected array $_films;

    public function __construct(string $nom, string $prenom, string $sexe, string $birth){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_birth = new DateTime($birth);
        $this->_films = [];
    }

    public function addFilm(string $newFilm){
        $this->_films []= $newFilm;
    }

    public function fullName(){
        return $this->_nom." ".$this->_prenom;
    }
}