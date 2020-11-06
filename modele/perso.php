<?php

class Perso
{
    protected $vie=100;

    #public function __construct()   {  }

    protected function folie()
    {
        $this->vie -= 10;
        if ($this->vie <= 0)
        {
            echo "la folie vous a mené à votre perte";
        }
    }

    protected function attaquer($arme,$cible)
    {
        $cible->vie -= $arme->getDegat() * $this->getForce();
        if ($cible->vie <= 0)
        {
            echo "cette attaque de ",$this->getNom()," avec sa ",$arme->getNom() ," a été fatale à ", $cible->getNom();
        }
        else
        {
            echo $cible->getNom()," a survecu à l'attaque, il lui reste", $cible->getVie();
        }
    }

}