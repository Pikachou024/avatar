<?php
include 'class/Color.php';
include 'class/Avatar.php';
include 'class/Affichage.php';
include 'class/Factory.php';

$svgModel=new Factory(300,300);
$taille=$_POST['taille'] ?? null;
$nbCouleur=$_POST['couleur'] ?? null;
$svg = $svgModel->createAvatar($taille,$nbCouleur);
if(!isset($_GET['ajax'])){
    include 'index.phtml';
}
else{
    echo $svg;
}

/*
 * Brouillon
 */
//$rectangle = '<rect x="' . $j . '" y="' . $i . '" width="1" height="1" fill="' . $color . '"  />';
//$rectangle = '<rect x="' . ($taille - $j - 1) . '" y="' . $i . '" width="1" height="1" fill="' . $color . '"  />';
//function randomColor(array $listeCouleur,int $nombre){
//    $listeStock=[];
//    for($i=0;$i<$nombre;$i++){
//        $listeStock[$i]=$listeCouleur[rand(0,4)];
//    }
//    return $listeStock[rand(0,$nombre-1)];
//}


//$listeCouleur=['blue','red','green','purple','yellow'];
//$listeRect=[];
//$svg = '<svg width = "300" height = "300" >';
// if(!empty($_POST)) {
//     $taille = $_POST['taille'];
////     var_dump($taille);
//     $nbCouleur = $_POST['couleur'];
//     $svg = '<svg width = "300" height = "300" viewBox="0 0 ' . $taille . ' ' . $taille . '">';
//     for ($i = 0; $i < $taille; $i++) {
//         for ($j = 0; $j < $taille; $j++) {
//             $color = randomColor($listeCouleur, intval($nbCouleur));
//             if ($j != $taille / 2) {
//                 if ($j != $taille - 1) {
//                     $rectangle = '<rect x="' . $j . '" y="' . $i . '" width="1" height="1" fill="' . $color . '"  />';
//                     $svg .= $rectangle;
//                 }
//
//                 if (($taille - $j) - 1 != 0) {
//                     $rectangle = '<rect x="' . (($taille - $j) - 1) . '" y="' . $i . '" width="1" height="1" fill="' . $color . '"  />';
//                     $svg .= $rectangle;
//                 }
//             }
//         }
//     }
//     $svg .= '</svg>';
//
//
// }
//function randomColor(array $listeCouleur, int $nombre)
//{
//    $listeStock = [];
//    for ($i = 0; $i < $nombre; $i++) {
//        $listeStock[$i] = $listeCouleur[rand(0, 4)];
//    }
////        var_dump($listeStock);
//    return $listeStock[rand(0, $nombre - 1)];
//}

