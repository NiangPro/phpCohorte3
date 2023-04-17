<?php 

$classes = getAllClasses();

if(isset($_POST["ajouter"])){
    extract($_POST);
    if (ajoutClasse($nom, $taille)) {
       return header("Location:?page=classe");
    }
}

if (isset($_POST["modifier"])) {
    extract($_POST);
    if(editClasse($id, $nom, $taille)){
       return  header("Location:?page=classe");
    }
}

if(isset($_GET["delete"])){
    if (supprimerClasse($_GET["delete"])) {
        return  header("Location:?page=classe");
    }
}

if (isset($_GET["id"])) {
    var_dump($_GET["id"]);
    die();
}

if(isset($_GET["type"])){
    if(isset($_GET["id"])){
        $c = getClasseById($_GET["id"]);
    }
    require_once("views/ajoutClasse.php");

}else{

    require_once("views/classe.php");
}
