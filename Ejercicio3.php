<?php
if ($_POST){

    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    echo "Hello " . $nombre . " " . $apellido . " :)";
   
}

else {
echo "Hello, write your name and last name:)";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
    <form action="Ejercicio3.php" method="post">

    <input type="text" name="txtNombre" placeholder= "Nombre">
    <input type="text" name="txtApellido" placeholder= "Apellido">
    <input type="submit" value="Enviar">

   </form> 

</body>
</html>