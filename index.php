<?php

include 'film.php';

$premierFilm = new Film(1, "Bac Nord", 563921);

echo "Infos sur le film ==>\n" . $premierFilm->getIdFilm()." - ".$premierFilm->getNomFilm()." - ".$premierFilm->getNdEntrees()."\n";

