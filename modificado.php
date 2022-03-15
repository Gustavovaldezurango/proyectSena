

<?php
$conexion = mysqli_connect("localhost", "root", "", "gustavo") or
    die("Problemas con la conexión");

mysqli_query($conexion, "update citas set PrimerNombre ='$_REQUEST[PNnuevo]' 
                    where CorreoElectronico='$_REQUEST[cviejo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
echo "El mail fue modificado con exito";
?>
