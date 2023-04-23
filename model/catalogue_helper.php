<?php
require_once("../model/catalogue_data.php");
require_once("../model/db.php");

function get_catalogue_data(){
    $stmt = $GLOBALS['db']->query("SELECT * FROM t_produit p, t_categorie c WHERE p.fk_id_cat = c.id_cat");
    $result = $stmt->fetch();
    for($i = 0; $i < count($GLOBALS["catalogue_a"]); $i++){
        array_push($result, $GLOBALS["catalogue_a"][$i]);
    }
    return $result;
}

?>