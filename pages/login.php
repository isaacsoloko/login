<?php
    session_start();
    //On empêche à l'utilisateur de revenir sur login en etant déjà connecté
    if (!empty($_SESSION['user'])) {
        header('Location:profile.php');
    }
    //Si le bouton Se connecter est déclenché
    if (isset($_POST['login'])) {
        //On vérifie si l'utilisateur tente de se connecter sans être enregistré au préalable 
        if (!empty($_SESSION['fullname']) && !empty($_SESSION['email'])) {
            $user = trim($_POST['user']);
            $password = trim($_POST['password']);
            //On vérifie si les données saisies ne sont pas vide
            if (!empty($user) && !empty($password)) {
                $_SESSION['user'] = $user;
                $_SESSION['password'] = $password;
                header('Location:profile.php');
            }
        }
        else{
            header('Location:register.php');
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta property="og:title" content="Login System" />
        <meta property="og:type" content="profile" />
        <meta property="og:image" content="https://isaacsoloko.github.io/login/img/code.png" />
        <meta property="og:description" content="Php :: Mise en pratique des notions acquises" />
        <link rel="shortcut icon" href="../img/code.png" type="image/x-icon" />
        <link rel="stylesheet" href="../css/style.css" />
        <title>Login System</title>
    </head>
    <body>
        <div class="container">
            <h3>Connexion</h3>
            <form method="post" action="" class="login-form">
                <input type="text" name="user" placeholder="User name" />
                <input type="password" name="password" placeholder="User password" />
                <input type="submit" name="login" value="Se connecter" class="primary-btn" />
                <label>Pas encore membre ? <a href="register.php">créer un compte !</a></label>
            </form>
        </div>
    </body>
</html>