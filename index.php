<?php

include 'film.php';
include 'realisateur.php';
include 'acteur.php';

$real1 = new Realisateur("Jimenez", "Cédric");
$real2 = new Realisateur("Gozian", "Yann");
$real3 = new Realisateur("Reeves", "Matt");

$acteur1 = new Acteur("Lellouche", "Gilles", false);
$acteur2 = new Acteur("Civil", "François", false);
$acteur3 = new Acteur("Leklou", "Karim", true);
$acteur4 = new Acteur("Niney", "Pierre", true);
$acteur5 = new Acteur("De Laâge", "Lou", false);
$acteur6 = new Acteur("Dussolier", "André", true);
$acteur7 = new Acteur("Pattinson", "Robert", true);
$acteur8 = new Acteur("Kravitz", "Zoë", false);
$acteur9 = new Acteur("Dano", "Paul", false);

$listeActeurs1 = array($acteur1, $acteur2, $acteur3);
$listeActeurs2 = array($acteur4, $acteur5, $acteur6);
$listeActeurs3 = array($acteur7, $acteur8, $acteur9);

$premierFilm = new Film(1, "Bac Nord", 563921, $real1, $listeActeurs1);
$secondFilm = new Film(2, "Boîte noire", 432789, $real2, $listeActeurs2);
$troisiemeFilm = new Film(3, "The Batman", 879214, $real3, $listeActeurs3);

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
        echo "Infos sur le film ==>\n" . $listeFilm[$listCount]->getIdFilm()." - ".$listeFilm[$listCount]->getNomFilm()." - ".$listeFilm[$listCount]->getNdEntrees()." - ".$listeFilm[$listCount]->getReal()->getPrenom()." - ".$listeFilm[$listCount]->getReal()->getNom()."\nListe des acteurs ==>\n";
        foreach($listeFilm[$listCount]->getListeActeurs() as $acteur)
        {
            echo $acteur->getPrenom()." - ".$acteur->getNom()." - ";
            if ($acteur->isEstCesarise())
            {
                echo "true\n";
            }
            else
            {
                echo "false\n";
            }
        }
        echo "\n";
    }
