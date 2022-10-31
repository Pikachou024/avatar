<?php

class Avatar
{
    function generateAvatar($taille,$listeCouleur): array
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