<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux</title>
    <style>
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
        $tab = [25, 9, 12, 1, 16, 81];

        $carres = [];

        foreach ($tab as $val) {
            if($val == 1){
                $carres[] = $val;
            }else{
                for ($i=1; $i <= intdiv($val, 2) ; $i++) { 
                    if($i*$i == $val){
                        $carres[] = $val;
                        break;
                    }
                }
            }
        }
    ?>

    <table border="1">
        <tr>
            <?php foreach($carres as $c): ?>
            <td><?= $c ?></td>
            <?php endforeach; ?>
        </tr>
    </table>
</body>
</html>