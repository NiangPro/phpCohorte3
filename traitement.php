<?php
    if (isset($_POST['valider'])) {
        extract($_POST);

        echo " 
        Prenom : ".ucfirst($prenom)."<br>
        nom : ".ucfirst($nom)."<br>
        Tel : ".ucfirst($tel)."<br>
        Sexe : ".ucfirst($sexe)."<br>
        Pays : ".ucfirst($pays)."<br>
    
        " ;
    }