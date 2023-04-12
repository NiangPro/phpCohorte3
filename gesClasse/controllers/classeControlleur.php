<?php 

$classes = getAllClasses();

if(isset($_POST["ajouter"])){
    extract($_POST);
    if (ajoutClasse($nom, $taille)) {
       return header("Location:?page=classe");
    }
}

if(isset($_GET["type"])){
    require_once("views/ajoutClasse.php");

}else{

    require_once("views/classe.php");
}
