<?php

    require_once("../model/user_helper.php");

    if(isset($_POST) && !empty($_POST)){
        $login = htmlspecialchars(htmlentities($_POST['login']));
        $pwd = htmlspecialchars(htmlentities($_POST['password']));

        $user = log_user_in($login, $pwd);
        if($user != false){
            session_start();
            $_SESSION["user"] = $user;
            header("Location: ../view/landing.php");
        }
    }

?>