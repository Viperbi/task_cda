<?php


function addCategory($bdd, $name){
    //Requête
    $requete = "INSERT INTO category(name) VALUE(?)";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$name, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function aupdateCategory($bdd, $name, $id){
    //Requête
    $requete = "UPDATE category SET name=? WHERE id_category=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$name, PDO::PARAM_STR);
        $req->bindParam(2,$id, PDO::PARAM_INT);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function deleteCategory($bdd, $name, $id){
    //Requête
    $requete = "DELETE FROM category WHERE id_category = ?";
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

function getCategoryByName($bdd, $name){
    //Requête
    $requete = "SELECT id_category, name FROM category WHERE name=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$name, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function getAllCategory($bdd){
    //Requête
    $requete = "SELECT id_category, name FROM category";
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