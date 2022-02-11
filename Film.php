<?php

Class film
{
    private string $_titre;
    private string $_date;
    private int $_dure;
    private Realisateur $_realisateur;
    private string $_synopsis;
    private Genre $_genre;

    private array $_casting;

    public function __construct(string $titre, string $date, int $dure, Realisateur $realisateur, string $synopsis ="", Genre $genre){
        $this->_titre = $titre;
        $this->_date = $date;
        $this->_dure = $dure;
        $this->_realisateur = $realisateur;
        $this->_synopsis = $synopsis;
        $this->_genre = $genre;
        $this->_casting = [];

        $realisateur->addFilm($this->_titre);
        $genre->addFilm($this->_titre);
    }

    // fonction qui dit que mon casting c'est ca et que l'acteur vient de jouer dnas mon film ! ET le role est joué par CES acteurS !
    public function casting(Role $role, array $acteurs){
        
        $this->_casting []= $role->get_personnage()." a été incarné par ".implode(", ",$acteurs);


        for ($i=0; $i < count($acteurs); $i++) { 
            $acteurs[$i]->addFilm($this->_titre);
            $role->addActeur($acteurs[$i]->fullName());
        }
    }

    public function __toString(){
        return "Dans ".$this->_titre.", ".implode(", ", $this->_casting);
    }
}