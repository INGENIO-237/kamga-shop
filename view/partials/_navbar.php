<?php
session_start();

function render_navbar(){
    echo("<nav class='menu navbar fixed-top'>
    <h1 id=''>KAMGA'Shop</h1>
    <ul>
        <li><a href='./landing.php'>ACCUEIL</a></li>
        <li><a href='./card.php'>PANIER</a></li>
        <li><a href='./about.php'>A PROPOS</a></li>
        ");
        if(isset($_SESSION['user'])){
            echo "
            <li style='margin-left:20px'> Hello, ". $_SESSION['user']['login'] ."</li>
            <a href='../controller/logout.php' class='btn btn-danger p-3'>Se deconnecter</a>
            ";
        }
    echo"</ul>
    </nav>";
}
