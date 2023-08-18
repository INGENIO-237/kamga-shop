<?php

// Vide le panier
session_start();
unset($_SESSION['user_card']);
header("Location: ../view/landing.php");

?>