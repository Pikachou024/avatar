<?php
/*
 * Sauvegarde de l'avatar dans un dossier en générant un nom aléatoire commençant par avatar suivant d'un nombre
 * ne gère pas la malchance d'un nom de fichier existant . . .
 */
$filePath='../avatar/';
$filename = $_GET['filename'] ?? "avatar" . rand(0, 1000) . ".svg";
$avatar = $_POST['avatar'];
file_put_contents($filePath.$filename, $avatar);

if(empty($_GET)){
    echo "Merci d'avoir téléchargé";
}
else{
    header('location:../index.php');
}
