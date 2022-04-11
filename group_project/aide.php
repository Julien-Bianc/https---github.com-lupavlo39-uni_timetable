<?php
//Commencer une session
session_start();

//Pour se connecter à la bdd (important) :
$database = new PDO('mysql:host=localhost;dbname=groupproject', 'root', '');

//Retour à l'écran de connexion s'il n'y a pas de session :
if(!$_SESSION['passwd']){
    header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
</head>
<body>
    HOME
    <nav>
    <a href="connexion.php">Sign in</a>
    </nav>
    
    <?php
        echo "All admins :<br>ID | Last name<br>";

        //Requête dans la table des admins (important, même fonctionnement pour toutes les requêtes):
        $allAdmins = $database->query('SELECT * FROM admin');

        while($admin = $allAdmins->fetch()){
            echo $admin['LastName'], " | ", $admin['IDAdmin'];
        }
    ?>

</body>
</html>
