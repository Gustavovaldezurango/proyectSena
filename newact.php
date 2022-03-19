<?php
include("cn.php");
$id=   $_GET["id"];
$usuarios = "SELECT * FROM citas WHERE CodigoCita ='$id' ";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>

    <header>
    <img  id="logo" src="logo.png">
    </header>
        
    <nav>
        <form action="buscar.php">
            <input type="text" name="buscar" id="buscar">
            <input type="submit" value="Buscar">
        </form>
    </nav>
    <section>
        <form action="proceact.php" method="POST">
        <table border="1">
            <tr>
                <th colspan="8">datos de citas</th>
                
            </tr>
            <tr>
                
                <th>Primer nombre</th>
                <th>segundo nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Telefono</th>
                <th>correo</th>
                <th>Fecha de Nacimiento</th>
                <th> Genero</th>
                
            </tr>
            <?php $resultado = mysqli_query($conexion, $usuarios);



            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <tr>
                    <input type="hidden" value="<?php echo $row["CodigoCita"]?>" name="CodigoCita">
                    <td> <input type="text" value="<?php echo $row["PrimerNombre"]?>" name="PrimerNombre"></td>
                    <td> <input type="text"  value="<?php echo $row["SegundoNombre"] ?>" name="SegundoNombre"></td>
                    <td><input type="text" value="<?php echo $row["PrimerApellido"] ?>" name="PrimerApellido"></td>
                    <td><input type="text" value="<?php echo $row["SegundoApellido"] ?>" name="SegundoApellido"></td>
                    <td><input type="text" value="<?php echo $row["Telefono"] ?>" name="Telefono"></td>
                    <td><input type="text" value="<?php echo $row["CorreoElectronico"] ?>" name="CorreoElectronico"></td>
                    <td><input type="text" value="<?php echo $row["FechaNacimiento"] ?>" name="FechaNacimiento"></td>
                    <td><input type="text" value="<?php echo $row["Genero"] ?>" name="Genero"></td>
                    <td><input type="submit" value="actualizar"></td>
                </tr> 
                
            <?php } ?>
        </table>
        </form>
    </section>
    <script>
     
    </script>

</body>

</html>