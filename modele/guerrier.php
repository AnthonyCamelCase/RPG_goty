<?php
require('perso.php');

class Guerrier extends Perso
{
    private $nom;
    private $force = 20;
    private $vitesse = 30;


    public function __construct($name)
    {
        $this->setNom($name);
    }

    private function setNom($name)
    {
        $this->nom = $name;
    }

    public function getNom()
    {
        return $this->nom;
    }


    public function getForce()
    {
        return $this->force;
    }
    
    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function getVie()
    {
        return $this->vie;
    }

    public function folie()
    {
        parent::folie();
    }

    public function AddArme( Arme $arme) //fonction qui permet de rajouter des armes
    {
        $this->armement[] = $arme;
    }

    public function attaquer($arme,$cible)
    {
        parent::attaquer($arme,$cible);
    }

    public function messageAttaquer(Arme $arme, $cible)
    {
        $arme->attaquer($this, $cible);
    }
}
