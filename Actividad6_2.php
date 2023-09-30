<?php
    
    if($_POST){

        $Edad = $_POST['Edad'];
        $Nombre = $_POST['Nombre'];
        $Estatura = $_POST['Estatura'];
        $EstadoCivil = $_POST['EstadoCivil'];

        echo "El perfil de Nombre: " . $Nombre . ", con Edad: " . $Edad . " años, tiene una Estatura de " . $Estatura . " m, y es: " . $EstadoCivil . " .";

    } else {

        echo
        '<form action="Actividad6_2.php" method="post">

        Nombre: <input type="text" name="Nombre"><br>
        Edad: <input type="number" name="Edad"><br>
        Estatura: <input type="text" name="Estatura"><br>
        Estado Civil:
            <select name="EstadoCivil" >
                <option value= "Casado">Casado</option>
                <option value= "Soltero">Soltero</option>
            </select>  
        <input type="submit" value="Enviar">  
    
        </form>';

    }

?>