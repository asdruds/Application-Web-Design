<?php

    if($_POST){

        $ValorA = $_POST['ValorA'];
        $ValorB = $_POST['ValorB'];

        if($ValorA > $ValorB){

            echo "El valor A es mayor que el valor B.";
        } else if ($ValorA < $ValorB){

            echo "El valor A es menor que el valor B.";
        } elseif ($ValorA == $ValorB){

            echo "Los valores son iguales :)";
        }

    } else {

        echo " ";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Valores</title>
</head>
<body>
<form action="" method="post">

    Valor A: <input type="number" name="ValorA" ><br>
    Valor B: <input type="number" name="ValorB" ><br>
    <input type="submit" value="Calcular">

</form>
</body>
</html>