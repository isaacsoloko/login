<?php
    session_start();
    $_SESSION['user'] = "";
    $_SESSION['fullname'] = "";
    $_SESSION['email'] = "";
    $_SESSION['password'] = "";
    header('Location:pages/login.php');