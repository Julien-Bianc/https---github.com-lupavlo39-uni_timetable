<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="p2AdminStyle.css"/>
      <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>
    <body>

        <a>Admin Login</a>
        
        <!--Sign In-->
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form method="POST" action ="" class="login">
                        <div class="login__field">
                            <i class="login__icon fas fa-user"></i>
                            <input type="text" class="login__input" placeholder="Admin ID" name="ID">
                        </div>
                        <div class="login__field">
                            <i class="login__icon fas fa-lock"></i>
                            <input type="password" class="login__input" placeholder="Password" name="passwd">
                        </div>
                        <button class="button login__submit" name="submit">
                            <span class="button__text">Log In Now</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>
                    <div class="social-login">
                        <div class="social-icons">
                            <a href="#" class="social-login__icon fab fa-instagram"></a>
                            <a href="#" class="social-login__icon fab fa-facebook"></a>
                            <a href="#" class="social-login__icon fab fa-twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>

    </body>
</html>

<?php
session_start();
$database = new PDO('mysql:host=localhost;dbname=groupproject', 'root', '');
$allAdmins = $database->query('SELECT * FROM admin');

if(isset($_POST['submit'])){
    if(!empty($_POST['ID']) AND !empty($_POST['passwd'])){

        $input_ID = htmlspecialchars($_POST['ID']);
        $input_passwd = htmlspecialchars($_POST['passwd']);
        
        while($admin = $allAdmins->fetch()){
            if($input_ID == $admin['AdminID'] AND $input_passwd == $admin['Password']){
                $_SESSION['passwd'] = $input_passwd;
                header('Location: p3Admin.php');
            }else{
                echo "Your user name or password is incorrect";
            }
        }
    }else{
        echo "Please complete the fields";
    }
}
?>