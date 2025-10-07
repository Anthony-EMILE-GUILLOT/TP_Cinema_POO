<?php

include 'film.php';
include 'realisateur.php';

$real1 = new Realisateur("Jimenez", "Cédric");
$real2 = new Realisateur("Gozian", "Yann");
$real3 = new Realisateur("Reeves", "Matt");

$premierFilm = new Film(1, "Bac Nord", 563921, $real1);
$secondFilm = new Film(2, "Boîte noire", 432789, $real2);
$troisiemeFilm = new Film(3, "The Batman", 879214, $real3);

$listeFilm = array($premierFilm, $secondFilm, $troisiemeFilm);
$nbLigneTab = count($listeFilm);

/*
$listeReal = array($real1, $real2, $real3);

for($listCount=0; $listCount < $nbLigneTab; $listCount++)
    {
        $realFilm = $listeReal[$listCount];
        echo "Infos sur le film ==>\n" . $listeFilm[$listCount]->getIdFilm()." - ".$listeFilm[$listCount]->getNomFilm()." - ".$listeFilm[$listCount]->getNdEntrees()." - ".$realFilm->getPrenom()." - ".$realFilm->getNom()."\n";
    }

 */

for($listCount=0; $listCount < $nbLigneTab; $listCount++)
    {
        echo "Infos sur le film ==>\n" . $listeFilm[$listCount]->getIdFilm()." - ".$listeFilm[$listCount]->getNomFilm()." - ".$listeFilm[$listCount]->getNdEntrees()." - ".$listeFilm[$listCount]->getReal()->getPrenom()." - ".$listeFilm[$listCount]->getReal()->getNom()."\n";
    }