<?php

if(!empty($_POST['avatar'])){
    $filename = "avatar".rand(0,100).".svg";
    $avatar = $_POST['avatar'];
}
else{
    header('location:index.php');
}
include '../template/register.phtml';