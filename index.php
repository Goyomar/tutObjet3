<h1>POO Cinéma</h1>

<p>Vous avez en charge degérer différentes entités autour de la thématique du cinéma.<br>
Les films seront identifiés parleur titre, leur date desortie en France, leur durée (en minutes) ainsi que leurréalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumédu film (synopsis)pourra    éventuellement    être    renseigné. Chaque    filmest    caractérisé    par    un    seul    genre cinématographique (science-fiction, aventure, action, ...).<br>
Votre  application  devra  recenser  également  les  acteurs  de  chacun  des  films.  On  désire  connaître  le nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).<br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où le mettre en place !</p>

<h3>Attention !</h3>

<ul>
    <li>Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteur</li>
</ul>

<p>On doit pouvoir :</p>

<ul>
    <li>Lister la liste des acteurs ayant incarné tel rôle</li>
    <li>Lister  le  casting  d'un  film  (Dans  Star  Wars,  Han  Solo  a  été  incarné  par  Harison  Ford,  Luke Skywalker a été incarné par Mark Hamill, ...)</li>
    <li>Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...)</li>
    <li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>
    <li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
</ul>

<h2>Résultat</h2>

<!-- 
film :          titre date duré réalisateur résumé(can be null) genre   
role :          [Acteur, Acteur]

genre ??? objet ou tableau multidemensionelle et du coup se rangerer la ou il faut pour display $genre[$eauDeRose[3]] = 
3eme film a l'eau de rose


Humain :
réalisateur :   unique nom prenom sexe birth
acteur :        nom prenom sexe birth [role]                              lien role acteur ?? 

DANS UN FILM YA DES ROLES JOUE PAR ACTEURS
afilié role de film a acteur
role = tableau d'acteur objet ET dans acteur j'aurai besoin d'un tableau des roles !
-->

<?php
require("HumainCinema.php");
require("Realisateur.php");
require("Acteur.php");
require("Film.php");
require("Role.php");
require("Genre.php");

$g1 = new Genre("Science-Fiction");

$r1 = new Realisateur("Georges","Lucas","Male", "14 May 1944");
$r2 = new Realisateur("Ridley","Scott","Male","30 November 1937");

$f1 = new Film("Star Wars","1977",121, $r1, "L'univers de Star Wars se déroule dans une galaxie qui est le théâtre d'affrontements entre les Chevaliers Jedi et les Seigneurs noirs des Sith.",$g1);
$f2 = new Film("Alien","1979",116,$r2,"Durant le voyage-retour du cargo spatial Nostromo après une mission commerciale de routine, l'équipage, cinq hommes et deux femmes plongés en hibernation2 depuis dix mois sont tirés de leur léthargie plus tôt que prévu par l'ordinateur de bord du vaisseau.", $g1);
$f3 = new Film("Blade Runner","1982",111,$r2,"L'histoire se déroule en novembre 2019, à Los Angeles, au climat pluvieux et où la quasi-totalité de la faune a disparu. La population est encouragée à émigrer vers les colonies situées sur d'autres planètes.",$g1);

$a1 = new Acteur("Hamill", "Marc", "Male","25 September 1951");
$a2 = new Acteur("Aiden","Barton","Male","1 January 2000");

$role1 = new Role("Luke Skywalker");

$f1->casting($role1,[$a1,$a2]);


$g2 = new Genre("Action");

// $r3 = new Realisateur("");



echo $role1." <-        acteur ayant incarné role<br>";
echo $f1." <-         Casting<br>";
echo $g1." <-         film par genre<br>";
echo $a1." <-         Filmo acteur<br>";
echo $r2." <-         filmo réa<br>";