<?php
    session_start();
    //On vérifie si l'utilisateur ne s'est pas encore enregistré ni connecté
    if (empty($_SESSION['user']) || empty($_SESSION['password']) || 
        empty($_SESSION['fullname']) || empty($_SESSION['email'])) {
        header('Location:login.php');
    }
    if (isset($_POST['deconnexion'])) {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header('Location:login.php');
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
            <div class="img-container">
                <img src="../img/user.png" alt="User image" />
            </div>
            <h4>Bienvenu dans votre compte, <?= $_SESSION['fullname'];?></h4>
            <div class="user-info">
                @<?= $_SESSION['user'];?> <br>
                <?= $_SESSION['email'];?>
            </div>
            <form method="post" action="">
                <input type="submit" name="deconnexion" value="Déconnexion" class="second-btn" />
            </form>
        </div>
    </body>
</html>