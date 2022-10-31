<?php

class Factory
{
    public $affichage ;
    public $avatar;
    public $color;

    function __construct($width,$height){
        $this->affichage=new Affichage($width,$height);
        $this->avatar=new Avatar();
        $this->color = new Color();
    }

    function createAvatar(?int $taille,?int $nbColor): string
    {
        if($taille == null){
            $taille = rand(2,10);
        }
        if($nbColor == null){
            $couleur = $this->color->randColor(rand(2,5));
        }
        else{
            $couleur = $this->color->randColor($nbColor);
        }
        $avatar=$this->avatar->generateAvatar($taille,$couleur);
        return $this->affichage->show($avatar);
    }
}