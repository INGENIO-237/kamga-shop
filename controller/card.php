<?php
if(isset($_POST) && !empty($_POST)){
    addToCard($_POST);
    header("Location: ../view/landing.php");
}

function addToCard($vProduct){
    session_start();
    $id = $vProduct["id"];
    $product = array(
        "nom"=>$vProduct['nom'.$id],
        "prix"=>$vProduct["prix".$id],
        "qtity"=>$vProduct["quantity".$id]
    );

    if(!isset($_SESSION['user_card'])){
        $_SESSION['user_card'] = array();
    }

    array_push($_SESSION['user_card'], $product);
}

?>