<?php
//Commencer une session
session_start();

//Pour se connecter à la bdd (important) :
$database = new PDO('mysql:host=localhost;dbname=groupproject', 'root', '');

//Retour à l'écran de connexion s'il n'y a pas de session :
if(!$_SESSION['passwd']){
    header('Location: p2Admin.php');
}

echo "You're logged in";
?>