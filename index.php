<?php
    session_start();
    $_SESSION['fullname'] = "Isaac SOLOKO";
    $_SESSION['user'] = "";
    $_SESSION['email'] = "isaacsoloko@gmail.com";
    $_SESSION['password'] = "";
    header('Location:pages/login.php');
