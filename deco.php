<?php
session_start();
session_destroy();

//Rédiriger vers la page d'accueil
header('location:index.php');
exit;
?>