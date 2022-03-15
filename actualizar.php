
<html>

<head>
<link rel="stylesheet" href="actualizar.css">
<title>Problema</title>
</head>

<body>
<header>
        <img  id="logo" src="logo.png">
    </header>
    

<?php

$conexion = mysqli_connect("localhost", "root", "", "gustavo") or
    die("Problemas con la conexión");

$registros = mysqli_query($conexion,  " SELECT * from Citas where PrimerNombre =
'$_REQUEST[buscar]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
if ($reg = mysqli_fetch_array($registros)) {
    ?>
<form action="modificado.php" method="post">
            <table border="1">
            <tr>
                <th colspan="2">actulizar datos de usuario</th>
                
            </tr>
            <tr>
            
            
            <input type="hidden" name="Ccnuevo" value="<?php echo $reg['CodigoCita'] ?>">
            </tr>
            <tr>
            <th>Primer nombre</th>
            <td><input type="text" name="PNnuevo" value="<?php echo $reg['PrimerNombre'] ?>"></td>
            <input type="hidden" name="PNviejo" value="<?php echo $reg['PrimerNombre'] ?>">
            </tr>
            <tr>
            <th>segundo nombre</th>
            <td><input type="text" name="SNnuevo" value="<?php echo $reg['SegundoNombre'] ?>"></td>
            <input type="hidden" name="SNviejo" value="<?php echo $reg['SegundoNombre'] ?>">
            </tr>
            <tr>
            <th>Primer Apellido</th>
            <td><input type="text" name="PAnuevo" value="<?php echo $reg['PrimerApellido'] ?>"></td>
            <input type="hidden" name="PAviejo" value="<?php echo $reg['PrimerApellido'] ?>">
            </tr>
            <tr>
            <th>Segundo Apellido</th>
            <td><input type="text" name="SAnuevo" value="<?php echo $reg['SegundoApellido'] ?>"></td>
            <input type="hidden" name="SAviejo" value="<?php echo $reg['SegundoApellido'] ?>">
            </tr>
            <tr>
            <th>Telefono</th>
            <td><input type="text" name="Tnuevo" value="<?php echo $reg['Telefono'] ?>"></td>
            <input type="hidden" name="Tviejo" value="<?php echo $reg['Telefono'] ?>">
            </tr>   
            <tr>
            <th>correo</th>
            <td><input type="text" name="Cnuevo" value="<?php echo $reg['CorreoElectronico'] ?>"></td>
            <input type="hidden" name="cviejo" value="<?php echo $reg['CorreoElectronico'] ?>">
            </tr>   
            <tr>
            <th>Fecha de Nacimiento</th>
            <td><input type="text" name="FNnuevo" value="<?php echo $reg['FechaNacimiento'] ?>"></td>
            <input type="hidden" name="FNviejo" value="<?php echo $reg['FechaNacimiento'] ?>">
            </tr>          
            <tr>
            <th> Genero</th>
            <td><input type="text" name="Gnuevo" value="<?php echo $reg['Genero'] ?>"></td>
            <input type="hidden" name="Gviejo" value="<?php echo $reg['Genero'] ?>">
            </tr>
            <tr>
                <th colspan ="2"><input type="submit" value="modificar" name="actualizar"></th>
            </tr>
            </table>
            
</form>


<?php
} else
echo "No existe alumno con dicho nombre";
    
?>
</body>

</html>

