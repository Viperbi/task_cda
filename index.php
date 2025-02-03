<?php
<<<<<<< HEAD
    echo "Bonjour";
?>
=======

include './vendor/autoload.php';
include './env.php';
include './utils/connexion.php';

include 'controller/categorieController.php';
$bdd = connexion();
ajouterCategory($bdd);

>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
