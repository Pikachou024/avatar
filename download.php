<?php

$filename = $_GET['filename'] ?? "avatar" . rand(0, 100) . ".svg";
$avatar = $_POST['avatar'];
file_put_contents($filename, $avatar);

if(empty($_GET)){
    echo "Merci d'avoir téléchargé";
}
else{
    header('location:index.php');
}
