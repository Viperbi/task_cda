<?php

include "model/account.php";

function ajouterAccount(PDO $bdd) {
    $messageAccount = "";
    if(isset($_POST["submit"])) {
       if(!empty($_POST["email"])) {
            $info = [$_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"]];
           $account = getAccountByEmail($bdd,$_POST["email"]);
           if(!$account) {
                addAccount($bdd, $info);
               $messageAccount = "Le compte a été créé";
           }
           else {
               $messageAccount = "Le compte existe déjà en BDD";
           } 
       }
   }
  
   afficherCompte($bdd, $messageAccount);
}

function afficherCompte(PDO $bdd, string $messageAccount = "") {
    $accounts = getAllAccount($bdd);
    $users = "<ul>";

    if(!empty($accounts)) {
        foreach($accounts as $account) {
        $users .="<li> {$account['firstname']}  {$account['lastname']}  {$account['email']}  </li>";
        }
        $users .= "</ul>";
    }
    else {
        $users = "<p>Aucun utilisateur enregistré</p>";
    }
    include 'vue/account.php';
}
?>