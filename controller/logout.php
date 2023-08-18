<?php

// Deconnecte l'utilisateur
session_start();
session_destroy();

header("Location: ../index.php");
?>