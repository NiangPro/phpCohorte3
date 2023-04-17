<?php 

try{

    $db = new PDO("mysql:dbname=gesClasse;host=localhost", "root", "");
}catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
}

function getAllClasses(){
    global $db;   
    try {
        $q = $db->prepare("SELECT * FROM classe ORDER BY nom ASC ");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur : ".$e->getMessage());
    }
}

function ajoutClasse($nom, $taille)
{
    global $db;

    try {
        $q = $db->prepare("INSERT INTO classe(nom, taille) VALUES(:nomc, :taillec)");
       return  $q->execute([
            "nomc" => $nom,
            "taillec" => $taille,
        ]);
    } catch (PDOException $e) {
        die("Erreur : ".$e->getMessage());
    }
}

function getClasseById($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM CLASSE WHERE idClasse = :id");

        $q->execute([
            "id" => $id]);
        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur : ".$e->getMessage());
    }
}

function editClasse($id, $nom, $taille){
    global $db;
    try {
        $q = $db->prepare("UPDATE classe SET nom = :nom, taille =:taille
        WHERE idClasse = :id");
        return $q->execute([
            "nom" => $nom,
            "taille" => $taille,
            "id" => $id
        ]);
    } catch (PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

function supprimerClasse($id){
    global $db;

    try {
        $q = $db->prepare("DELETE FROM classe WHERE idClasse = ?");
       return  $q->execute([$id]);
    } catch (PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}


function getAllEleves()
{
    global $db;

    try {
        $q = $db->prepare("SELECT e.ideleve as id, prenom, e.nom as nom, c.nom as nomclasse, datnais, tel, adresse
        FROM eleve e, classe c
        WHERE c.idClasse = e.idClasse");

        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur : ".$th->getMessage());
    }
}

