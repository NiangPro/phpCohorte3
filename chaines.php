<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $chaines = "Je suis une chaine de caracteres";
        $prenom = "bassirou";

        $val1 = "2345678dd";
        $val2 = "23456786";
       echo  strlen($chaines);
       echo $chaines[0]."<br>";
       echo $chaines[strlen($chaines) - 1]."<br>";
       echo substr($chaines, 12)."<br>";
       echo strrev($chaines)."<br>";
       echo strcmp($val1, $val2)."<br>";
       echo strchr($chaines, "chaine")."<br>";
       echo strval(34)."<br>";
       echo strtoupper($chaines)."<br>";
       echo ucfirst($prenom)."<br>";
       echo ucwords($chaines)."<br>";

       if(ctype_digit($val2))
            echo "$val2 contient uniquement des chiffres<br>";
       else
        echo "$val2 contient egalement des lettres<br>"; 
       
       
    ?>


<script>
    let chaines = "Je suis une chaine de caracteres";

    let age = 90;
    age.toString();

    // premiere caractere 
    console.log(chaines[0]);
    console.log(chaines[chaines.length -1]);
    console.log(chaines.substring(12));

    console.log(chaines.length);
    console.log(chaines.toUpperCase());
</script>
</body>
</html>