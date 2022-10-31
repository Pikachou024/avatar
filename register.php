<?php

if(!empty($_POST['avatar'])){
    $filename = "avatar".rand(0,100).".svg";
    $avatar = $_POST['avatar'];
//    $fichier = file_put_contents($filename, $avatar);
}
else{
    header('location:index.php');
}
include 'register.phtml';