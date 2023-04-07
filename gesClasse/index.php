<?php require_once('partials/entete.php'); 
  require_once("includes/database.php");

  $classes = getAllClasses();

 var_dump($classes[0]->nom) ;
?>

  <h1>Page d'accueil</h1>


<?php require_once('partials/pied.php'); ?>
