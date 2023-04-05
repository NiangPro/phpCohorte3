<?php

class Personne {
    public $prenom;
    public $nom;
    public $adresse;

    static $nbPersonne = 0;
    const PI = 3.14;

    public function __construct($prenom, $nom, $adresse)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->adresse = $adresse;
        self::$nbPersonne++;
    }

    public function afficher(){
        echo "Prenom: $this->prenom <br>
        Nom: $this->nom <br> 
        Adresse: $this->adresse <br>
        Pi:". self::PI ."<br>";
    }
}

class Etudiant extends Personne{
    public $datnais;
    public $matricule;
    public function __construct($prenom, $nom, $adresse, $datnais, $matricule)
    {
        parent::__construct($prenom, $nom, $adresse);
        $this->matricule = $matricule;
        $this->datnais = $datnais;
    }
}




$p1 = new Personne("Demba", "DIop", "Pikine");
$p2 = new Personne("Moukhamed", "Ndiaye", "PA");
$p3 = new Personne("fATOU", "BA", "FOUTA");
$p4 = new Personne("IBRAHIMA", "DIOKHANE", "bAMBEY");

$et1 = new Etudiant("Modou", "Fall", "UCAD", "12/03/2000", "ETOO23");
$et1->afficher();
// $p2->afficher();
// $p1->afficher();
// $p3->afficher();
// $p4->afficher();

echo "Le nombre d'objets est de ".Personne::$nbPersonne;
