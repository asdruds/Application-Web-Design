<?php
if ($_POST){

    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    echo "Hello " . $nombre . " " . $apellido . ". Welcome to our page :)";
   
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
    <title>Activity 6 - 1</title>
</head>
<body>
    
    <form action="Actividad6_1.php" method="post">

    <input type="text" name="txtNombre" placeholder= "Nombre">
    <input type="text" name="txtApellido" placeholder= "Apellido">
    <input type="submit" value="Enviar">

   </form> 

</body>
</html>