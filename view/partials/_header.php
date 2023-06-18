<?php

function render_header()
{
    echo ("<!DOCTYPE html>
    <html lang='fr'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='css/bootstrap.css'>
            <link rel='stylesheet' href='css/main.css'>
            <title>Kamga Shop</title>

            <script src='js/jquery.min.js'></script>
        </head>
        <body>
        ");
    if(!str_contains($_SERVER["SCRIPT_FILENAME"], "login.php")){
        echo"<header class='menu'>"; 
        require('partials/_navbar.php');
        render_navbar();
        echo("</header>");
    }
    echo"<div class='container'>";
    
}
