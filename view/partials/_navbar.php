<?php

if(!isset($_SESSION["user_card"]) || empty($_SESSION["user_card"])) $_SESSION["user_card"] = array();

function render_navbar(){
    echo("<nav class='menu navbar fixed-top'>
    <h1 id=''>KAMGA'Shop</h1>
    <ul>
        <li><a href='./landing.php'>ACCUEIL</a></li>
        <li><a href='./card.php'>PANIER (". count($_SESSION["user_card"]) .")</a></li>
        <li><a href='./about.php'>A PROPOS</a></li>
        <li><a href='./sponsors.php'>SPONSORS</a></li>
        ");
        if(isset($_SESSION['user'])){
            echo "
            <li style='margin-left:20px'> Hello, ". $_SESSION['user'][0]['login_use'] ."</li>
            <a href='../controller/logout.php' class='btn btn-danger p-3'>Se deconnecter</a>
            ";
        }
    echo"</ul>
    </nav>";
}
