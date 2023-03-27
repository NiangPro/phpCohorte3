<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Bonjour tout le monde</h1>

    <?php
        $prenom = 'Bassirou';
        $nom = 'Niang';

        $age = "23";
        settype($age, "integer");
        unset($age);

        define("PI", 3.14);
        echo 'Bonjour '.$prenom. " et Pi egale a ".PI;
        echo  isset($age) ? "<br>".gettype($age) : "";
     
     ?>


    <script>
        let prenom = "alioune", nom = 'fall';
        const RAUX = 2.34;
        let age = "23";

        age = parseInt(age);

        document.write(sexe);

        alert(typeof age)
        document.write("Bonjour "+prenom+" et raux est egale a "+RAUX);
    </script>
</body>
</html>