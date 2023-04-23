<?php

    require_once("../model/user_helper.php");

    if(isset($_POST) && !empty($_POST)){
        $login = htmlspecialchars(htmlentities($_POST['login']));
        $pwd = htmlspecialchars(htmlentities($_POST['password']));

        $user = log_user_in($login, $pwd);
        if($user != false){
            session_start();
            $_SESSION["user"] = $user;
            if($_POST['remember-me'] == true){
                setcookie("user_login", $login, time()+60*60*24*30, domain:$_SERVER['SERVER_ADDR']);
                setcookie("user_pwd", $pwd, time()+60*60*24*30, domain:$_SERVER['SERVER_ADDR']);
            }
            header("Location: ../view/landing.php");
        }else{
            die("User not found");
        }
    }

?>