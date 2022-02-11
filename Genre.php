<?php

Class Genre
{
    private string $_genre;
    private array $_films;

    public function __construct(string $genre){
        $this->_genre = $genre;
    }

    public function addFilm(string $newFilm){
        $this->_films []= $newFilm;
    }

    public function __toString(){
        return "Dans le genre SF il y a ".count($this->_films)." films :".implode(", ", $this->_films);
    }
}