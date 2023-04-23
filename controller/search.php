<?php

require_once("../model/catalogue_data.php");
require_once("../model/db.php");

function get_search_data($data){
    $stmt = $GLOBALS['db']->query("SELECT * FROM t_produit p, t_categorie c WHERE p.fk_id_cat = c.id_cat AND p.nom_pro LIKE '%$data%'");
    $result = $stmt->fetchAll();
    return $result;
}

?>