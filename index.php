<?php

  session_start();
  if(isset($_SESSION['user'])){
    header('Location: view/landing.php');
  }else if($_COOKIE["user_login"] && $_COOKIE['user_pwd']){
    $user = log_user_in($_COOKIE["user_login"], $_COOKIE["user_pwd"]);
    if($user != false){
      session_start();
      $_SESSION["user"] = $user;
      header("Location: ./view/landing.php");
    }
    header('Location: ./index.php');
  }else{
    header('Location: view/login.php');
  }
  exit;
?>