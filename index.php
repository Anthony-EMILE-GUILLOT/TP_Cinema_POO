<?php

include 'film.php';

$premierFilm = new Film(1, "Bac Nord", 563921);

//echo "Infos sur le film ==>\n" . $premierFilm->getIdFilm()." - ".$premierFilm->getNomFilm()." - ".$premierFilm->getNdEntrees()."\n";

$secondFilm = new Film(2, "Boîte noire", 432789);
$troisiemeFilm = new Film(3, "The Batman", 879214);

$listeFilm = array($premierFilm, $secondFilm, $troisiemeFilm);
$nbLigneTab = count($listeFilm);
for($listCount=0; $listCount < $nbLigneTab; $listCount++)
    {
        echo "Infos sur le film ==>\n" . $listeFilm[$listCount]->getIdFilm()." - ".$listeFilm[$listCount]->getNomFilm()." - ".$listeFilm[$listCount]->getNdEntrees()."\n";
    }