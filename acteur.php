<?php

class Acteur
{
    private string $prenom;
    private string $nom;
    private bool $estCesarise;

    public function __construct(string $prenom, string $nom, bool $estCesarise)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->estCesarise = $estCesarise;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function isEstCesarise(): bool
    {
        return $this->estCesarise;
    }

    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setEstCesarise(bool $estCesarise): void
    {
        $this->estCesarise = $estCesarise;
    }
}