<?php

if(!isset($_SESSION['user'])){
    header('location:index.php');
    exit;
}
    $users= $_SESSION['user'];
    include './vue/viewMyAccount.php';
?>