<?php

class Affichage
{
    private $width;
    private $height;

    function __construct($width,$height){
        $this->width =$width;
        $this->height=$height;
    }

    /*
     * Construit les balises HTML (svg et rect)
     */
    function show(array $avatar): string
    {
        $svg='<svg width ="'.$this->width .'" height="'.$this->height.'"></svg>';
        if(($avatar) != null){
            $taille=count($avatar);
            $svg = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width ="'.$this->width .'" height ="'.$this->height.'" viewBox="0 0 '.$taille.' '.$taille.'">';
            for($i = 0 ; $i<count($avatar) ; $i++){
                for($j = 0 ; $j<count($avatar) ; $j++) {
                    $rectangle = '<rect class="avatar" x="' . $j . '" y="' . $i . '" width="1" height="1" fill="' . $avatar[$i][$j] . '"  />';
                    $svg .= $rectangle;
                }
            }
            $svg.='</svg>';
        }
        return $svg;
    }
}
