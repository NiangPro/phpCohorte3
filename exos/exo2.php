<?php
$cpt = 0;
    $mot = "matam";

    if (strrev($mot) == $mot) {
        echo "$mot est un palindrome<br>";
    } else {
        echo "$mot n'est pas palindrome<br>";
    }

    $w = strtolower($mot);
    

    for ($i=0; $i < strlen($w) ; $i++) { 
        if($w[$i] == "a" || $w[$i] == "o" || $w[$i] == "i" || $w[$i] == "u" || $w[$i] == "e" || $w[$i] == "y")
            $cpt++;
    }

    echo "$mot contient $cpt voyelles<br>";
    