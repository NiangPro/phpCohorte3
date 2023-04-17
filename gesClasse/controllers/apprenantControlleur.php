<?php 

$eleves = getAllEleves();
$classes = getAllClasses();

if(isset($_GET["type"])){
    require_once("views/ajoutEleve.php");
}else{

    require_once("views/apprenant.php");
}