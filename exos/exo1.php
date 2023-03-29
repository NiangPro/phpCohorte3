<?php
 $nombre = 13;

 $cpt = 0;

 for ($i=1; $i <= $nombre ; $i++) { 
    if ($nombre % $i == 0) {
        $cpt++;
    }
 }

 if($cpt == 2 || $nombre == 1){
    echo "$nombre est un nombre premier";
 }else{
    echo "$nombre n'est pas un nombre premier";

 }