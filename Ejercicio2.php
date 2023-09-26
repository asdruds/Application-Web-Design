<?php

if ($_POST){

    $nombre = $_POST["txtNombre"];
    echo "Hello " . $nombre . " :)";
   
}

else {

echo "Hello, write your name :)";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
   <form action="Ejercicio2.php" method="post">

    <input type="text" name="txtNombre" placeholder= "Nombre">
    <input type="submit" value="Enviar">

   </form> 
    
</body>
</html>
