<?php

<<<<<<< HEAD
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
=======

/**
 * @method ajouter une tache en BDD
 * @param PDO $bdd
 * @param array $task [title, content, create_at, id_account]
 * @return void
 */
function addTask(PDO $bdd, array $task): void {
    try {
        $requete = "INSERT INTO task(title, content, create_at, id_account)
        VALUE(?,?,?,?)";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$task[0], PDO::PARAM_STR);
        $req->bindParam(2,$task[1], PDO::PARAM_STR);
        $req->bindParam(3,$task[2], PDO::PARAM_STR);
        $req->bindParam(4,$task[3], PDO::PARAM_INT);
>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

<<<<<<< HEAD
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
=======
/**
 * @method mettre à jour une tache en BDD
 * @param PDO $bdd
 * @param array $task [title, content, create_at, id_account, id_task]
 * @return void
 */
function updateTask(PDO $bdd, array $task): void {
    try {
        $requete = "UPDATE task SET title = ?, content = ?, create_at = ?, id_account =?
        WHERE id_task = ?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$task[0], PDO::PARAM_STR);
        $req->bindParam(2,$task[1], PDO::PARAM_STR);
        $req->bindParam(3,$task[2], PDO::PARAM_STR);
        $req->bindParam(4,$task[3], PDO::PARAM_INT);
        $req->bindParam(5,$task[4], PDO::PARAM_INT);
>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

<<<<<<< HEAD
function deleteTask($bdd, $id){
    //Requête
    $requete = "DELETE FROM task WHERE id_task = ?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$id, PDO::PARAM_INT);
        //Exécuter la requête
=======
/**
 * @method supprimer une tache en BDD
 * @param PDO $bdd
 * @param int $id
 * @return void
 */
function deleteTask(PDO $bdd, int $id): void {
    try {
        $requete = "DELETE FROM task WHERE id_task = ?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$id, PDO::PARAM_INT);
>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
        $req->execute();
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

<<<<<<< HEAD
function getTaskByTitle($bdd, $title){
    //Requête
    $requete = "SELECT id_task,title,content,create_at,status FROM Task WHERE title=?";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Associer les paramètres (?)
        $req->bindParam(1,$title, PDO::PARAM_STR);
        //Exécuter la requête
=======
/**
 * @method afficher une tache par son ID
 * @param PDO $bdd
 * @param int $id
 * @return array task [id_task, title, content, create_at, status, id_account]
 */
function getTaskById(PDO $bdd, int $id): ?array {
    try {
        $requete = "SELECT id_task, title, content, create_at, `status`,id_account
        WHERE id_task = ?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$id, PDO::PARAM_INT);
>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

<<<<<<< HEAD
function getAllTask($bdd){
    //Requête
    $requete = "SELECT id_task,title,content,create_at,status FROM Task";
    try {
        //Préparation de la requête
        $req = $bdd->prepare($requete);
        //Exécuter la requête
=======
/**
 * @method afficher une tache par son ID
 * @param PDO $bdd
 * @return array array<task> [id_task, title, content, create_at, status, id_account]
 */
function getAllTask(PDO $bdd): ?array {
    try {
        $requete = "SELECT id_task, title, content, create_at, `status`,id_account";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$id, PDO::PARAM_INT);
>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}
<<<<<<< HEAD
?>
=======

/**
 * @method afficher une tache par son ID avec l'auteur et les categories
 * @param PDO $bdd
 * @param int $id
 * @return array [id_task, title, content, create_at, status, firstname, lastname, [id_task, name]]
 */
function getTaskCompleteById(PDO $bdd, int $id): ?array {
    try {
        $requete = "SELECT t.id_task, t.title, t.content, t.create_at, t.`status`,
        a.firstname, a.lastname, group_concat(c.id_category, c.name) AS categories FROM task AS t
        INNER JOIN account AS a ON t.id_account = a.id_account
        INNER JOIN task_category AS tc ON t.id_task = tc.id_task
        INNER JOIN category AS c ON tc.id_category = c.id_category
        WHERE id_task = ?";
        $req = $bdd->prepare($requete);
        $req->bindParam(1,$id, PDO::PARAM_INT);
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}

/**
 * @method afficher toutes les taches avec les categories et l'auteur en plus
 * @param PDO $bdd
 * @return array array<task> [id_task, title, content, create_at, status, firstname, lastname, [id_task, name]]
 */
function getAllTaskComplete(PDO $bdd): ?array {
    try {
        $requete = "SELECT t.id_task, t.title, t.content, t.create_at, t.`status`,
        a.firstname, a.lastname, group_concat(c.id_category, c.name) AS categories FROM task AS t
        INNER JOIN account AS a ON t.id_account = a.id_account
        INNER JOIN task_category AS tc ON t.id_task = tc.id_task
        INNER JOIN category AS c ON tc.id_category = c.id_category";
        $req = $bdd->prepare($requete);
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    } catch (Exception $e) {
        echo "Erreur" . $e->getMessage();
    }
}
>>>>>>> 28a4d9fed70a78743f3da20cf2f29aad6e427412
