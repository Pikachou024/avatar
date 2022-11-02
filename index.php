<?php
declare(strict_types=1);

spl_autoload_register(function ($class) {
    include 'class/'.$class .'.php';
});

/*
 * On instancie la Class Factory pour pouvoir générer un avatar
 * Si la taille et le nombre de couleur est null, un avatar est créé par défault
 * sinon l'avatar sera créé avec les paramètres que l'utilisateur aura donné pour la taile et le nombre de couleur
 */
$svgModel = new Factory(300,300);
$taille = $_POST['taille'] ?? null;
$nbCouleur = $_POST['couleur'] ?? null;
$svg = $svgModel->createAvatar($taille,$nbCouleur);

/*
 * si le formulaire n'est pas soumis (avec une methode GET) on renvoit sur index.phtml
 * sinon on envoit le svg en donnée
 */
if(!isset($_GET['ajax'])){
    include 'template/index.phtml';
}
else{
    echo $svg;
}
