<?php
function renderHeader(){
    $nav = '';
    if(isset($_SESSION['id'])){
       $nav='<a href="/task_cda/moncompte">Mon Compte</a>
            <a href="/task_cda/deconnexion">Se Déconnecter</a>';
    }
    include './vue/header.php';
}