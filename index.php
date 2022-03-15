<?php
include("cn.php");
$usuarios = "SELECT * FROM citas";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
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
        <table border="1">
            <tr>
                <th colspan="7">datos de citas</th>
                <th><a href="edicion.html"> ir edicion</a></th>
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
                    <td><?php echo $row["PrimerNombre"] ?></td>
                    <td><?php echo $row["SegundoNombre"] ?></td>
                    <td><?php echo $row["PrimerApellido"] ?></td>
                    <td><?php echo $row["SegundoApellido"] ?></td>
                    <td><?php echo $row["Telefono"] ?></td>
                    <td><?php echo $row["CorreoElectronico"] ?></td>
                    <td><?php echo $row["FechaNacimiento"] ?></td>
                    <td><?php echo $row["Genero"] ?></td>
                    
                    
                </tr>
                
            <?php } ?>
        </table>
    </section>


</body>

</html>