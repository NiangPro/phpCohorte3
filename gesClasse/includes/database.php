<?php 

try{

    $db = new PDO("mysql:dbname=gesClasse;host=localhost", "root", "");
}catch(PDOException $e){
    die("Erreur : ".$e->getMessage());
}

function getAllClasses(){
    global $db;   
    try {
        $q = $db->prepare("SELECT * FROM classe");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur : ".$e->getMessage());
    }
}

