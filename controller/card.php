<?php
if(isset($_POST) && !empty($_POST)){
    addToCard($_POST);
    header("Location: ../view/landing.php");
}

// Add a product to the card
function addToCard($vProduct){
    session_start();
    $id = $vProduct["id"];
    $product = array(
        "nom"=>$vProduct['nom'.$id],
        "prix"=>$vProduct["prix".$id],
        "qtity"=>$vProduct["quantity".$id]
    );
    // Add product to card
    if(!isset($_SESSION['user_card'])){
        $_SESSION['user_card'] = array();
    }
    // Check if product exists already in the card
    // If so, increment. Else add to the card
    if(check_existence($_SESSION['user_card'], $product)){
        $position = get_position($_SESSION['user_card'], $product);
        $_SESSION['user_card'][$position]['qtity'] += (int)$product["quantity".$id];
    }else{
        array_push($_SESSION['user_card'], $product);
    }
}

// Check the existence a product in the card
function check_existence($products, $product){
    for($i = 0; $i < count($products); $i++){
        if($products[$i]['nom'] == $product['nom']) return true;
    }
    return false;
}

// Get the position of a specific product in the card
function get_position($products, $product){
    if(check_existence($products, $product)){
        for($i = 0; $i < count($products); $i++){
            if($products[$i]['nom'] == $product['nom']) return $i;
        }
        return -1;
    }
}

?>