<?php

class Arme
{
    private $nom;
    private $degat;
    private $usure = 5;

    public function __construct($name,$deg)
    {
        $this->setNom($name);
        $this->setDegat($deg);
    }

    private function setNom($name)
    {
        $this->nom = $name;
    }

    private function setDegat($deg)
    {
        $this->degat = $deg;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDegat()
    {
        return $this->degat;
    }

    public function attaquer(Guerrier $war, $cible)
    {
        echo $war->getNom(), " lance une attaque avec une " , $this->getNom()," sur ", $cible->getNom();
    }
}