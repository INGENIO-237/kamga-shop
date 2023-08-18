<?php

$host = 'localhost';
$dbname = '4ipdw_kamga_emmanuel';

$user = 'root';
$pwd = '';

try{
    // Connexion à la BD
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>