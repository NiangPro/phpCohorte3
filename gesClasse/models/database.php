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

