<?php

class Avatar
{
    /*
     * Création d'un tableau 2D pour définir les couleurs de chaque case pour l'avatar
     */
    function generateAvatar(?int $taille,?array $listeCouleur): array
    {
        $arrayAvatar=[];
        $arrayX=[];
        for($i=0;$i<$taille;$i++){
            for($j=0;$j<$taille;$j++) {
                if ($j != $taille / 2) {
                    $color=$listeCouleur[rand(0,count($listeCouleur)-1)];
                    if($j != $taille - 1){
                        $arrayX[$j]=$color;
                    }
                    if(($taille - $j -1) != 0){
                        $arrayX[$taille - $j-1]=$color;
                    }
                }
            }
            $arrayAvatar[]=$arrayX;
            unset($arrayX);
        }
        return $arrayAvatar;
    }
}