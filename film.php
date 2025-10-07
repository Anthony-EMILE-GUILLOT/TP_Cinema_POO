<?php

class Film
{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;
    private Realisateur $real;
    private array $listeActeurs = [];

    public function __construct(int $idFilm, string $nomFilm, int $nbEntrees, Realisateur $real, array $listeActeurs = [])
    {
        $this->idFilm = $idFilm;
        $this->nomFilm = $nomFilm;
        $this->nbEntrees = $nbEntrees;
        $this->real = $real;
        $this->listeActeurs = $listeActeurs;
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

    public function getReal(): Realisateur
    {
        return $this->real;
    }
    
    public function getListeActeurs(): array
    {
        return $this->listeActeurs;
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

    public function setReal(Realisateur $real): void
    {
        $this->real = $real;
    }

    public function setListeActeurs(array $listeActeurs): void
    {
        $this->listeActeurs = $listeActeurs;
    }
}