<?php
session_start();
$database = new PDO('mysql:host=localhost;dbname=groupproject', 'root', '');

if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['passwd'])){
        $default_usr_name = "admin";
        $default_passwd = "admin1234";

        $input_usr_name = htmlspecialchars($_POST['pseudo']);
        $input_passwd = htmlspecialchars($_POST['passwd']);
        
        if($input_usr_name == $default_usr_name AND $input_passwd == $default_passwd){
            $_SESSION['passwd'] = $input_passwd;
            header('Location: index.php');

        }else{
            echo "Your user name or password is incorrect<br>";
        }
    }
    else{
        echo "Please complete the fields<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin sign in</title>
    <meta charset="utf-8">
</head>
<body>
    SIGN IN
    <nav>
        <a href="index.php">Home</a>
    </nav>
    <form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
        <br>
        <input type="password" name="passwd">
        <br><br>
        <input type="submit" name="valider">
    </form>
</body>
</html>
