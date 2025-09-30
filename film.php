<?php

class Film
{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;

    public function __construct(int $idFilm, string $nomFilm, int $nbEntrees)
    {
        $this->idFilm = $idFilm;
        $this->nomFilm = $nomFilm;
        $this->nbEntrees = $nbEntrees;
    }

    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

    public function getNomFilm(): string
    {
        return $this->nomFilm;
    }

    public function getNdEntrees(): int
    {
        return $this->nbEntrees;
    }

    public function setIdFilm(int $idFilm): void
    {
        $this->idFilm = idFilm;
    }

    public function setNomFilm(string $nomFilm): void
    {
        $this->nomFilm = $nomFilm;
    }

    public function setNbEntrees(int $nbEntrees): void
    {
        $this->nbEntrees = $nbEntrees;
    }

}