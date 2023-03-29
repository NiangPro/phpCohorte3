<?php 

echo "<pre>";
$tab = ["Mandoumbe", "ndiaye", 89, "Pikine"];
$chaine = "Bassirou Niang";

$entiers = [100,23, 47, 78];

echo $tab["prenom"];

echo $tab[0]."<br>";
echo count($tab)."<br>";
echo $tab[count($tab) - 1]."<br>";

array_push($tab,"TEST");

$tab[] = "ALIOUNE";
array_unshift($tab, "PREMIER");

foreach ($tab as $cle => $valeur) {
    echo "$cle => $valeur \t";
}

echo implode(" ", $tab)."<br>";

$perso = explode(" ", $chaine);

print_r($perso);
// in_array()


echo  array_shift($tab)."<br>";
echo  array_pop($tab)."<br>";

echo array_sum($entiers);

sort($entiers, 0);

krsort($entiers);

print_r($entiers);

echo "</pre>";