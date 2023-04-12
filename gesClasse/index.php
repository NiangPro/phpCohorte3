<?php

require_once("models/database.php");

// entete 
 require_once('partials/entete.php'); 

//contenu
if (isset($_GET["page"])) {
  switch ($_GET["page"]) {
    case 'classe':
      require_once("controllers/classeControlleur.php");
      break;
      case 'apprenant':
        require_once("controllers/apprenantControlleur.php");
        break;
    
    default:
    require_once('views/home.php'); 

    break;
  }
}else{
  require_once('views/home.php'); 
}
 
 
//  pied de page 
 require_once('partials/pied.php'); 