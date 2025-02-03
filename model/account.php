<?php

function addAccount($bdd, $firstname, $lastname, $email, $password){
    //Requête
    $requete = "INSERT INTO account(firstname,lastname,email,password) VALUE(?,?,?,?)";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$firstname, PDO::PARAM_STR);
        $req->bindParam(2,$lastname, PDO::PARAM_STR);
        $req->bindParam(3,$email, PDO::PARAM_STR);
        $req->bindParam(4,$password, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function updateAccount($bdd, $firstname, $lastname, $email, $newmail, $password){
    //Requête
    $requete = "UPDATE account SET firstname=?,lastname=?,email=?,password=? WHERE email=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$firstname, PDO::PARAM_STR);
        $req->bindParam(2,$lastname, PDO::PARAM_STR);
        $req->bindParam(3,$newmail, PDO::PARAM_STR);
        $req->bindParam(4,$password, PDO::PARAM_STR);
        $req->bindParam(5,$email, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function deleteAccount($bdd, $id){
    //Requête
    $requete = "DELETE FROM account WHERE id_account = ?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$id, PDO::PARAM_INT);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function getAccountByMail($bdd, $email){
    //Requête
    $requete = "SELECT id_account,firstname,lastname,email FROM account WHERE email=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$email, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}
function getInfoConnexion($bdd, $email){
    //Requête
    $requete = "SELECT email,password FROM account WHERE email=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$email, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function getAllAccount($bdd){
    //Requête
    $requete = "SELECT id_account,firstname,lastname,email FROM account";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Exécuter la requête
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}
?>