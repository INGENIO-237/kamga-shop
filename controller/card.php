<?php


function addToCard($product){
    session_start();

    if(!isset($_SESSION['user_card'])){
        $_SESSION['user_card'] = array();
    }

    array_push($_SESSION['user_card'], $product);
}

?>