<?php

function addTask($bdd, $title, $content, $status, $time){
    //Requête
    $requete = "INSERT INTO task(title,content,create_at) VALUE(?,?,?)";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$title, PDO::PARAM_STR);
        $req->bindParam(2,$content, PDO::PARAM_STR);
        $req->bindParam(3,$time, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function updateTask($bdd, $new_title, $content, $time, $status,$title){
    //Requête
    $requete = "UPDATE task SET title=?,content=?,create_at=?,status=? WHERE title=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$new_title, PDO::PARAM_STR);
        $req->bindParam(2,$content, PDO::PARAM_STR);
        $req->bindParam(3,$time, PDO::PARAM_STR);
        $req->bindParam(4,$status, PDO::PARAM_STR);
        $req->bindParam(5,$title, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function deleteTask($bdd, $id){
    //Requête
    $requete = "DELETE FROM task WHERE id_task = ?";
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

function getTaskByTitle($bdd, $title){
    //Requête
    $requete = "SELECT id_task,title,content,create_at,status FROM Task WHERE title=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$title, PDO::PARAM_STR);
        //Exécuter la requête
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

function getAllTask($bdd){
    //Requête
    $requete = "SELECT id_task,title,content,create_at,status FROM Task";
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