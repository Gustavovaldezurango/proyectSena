<?php
include("cn.php");

$cc = $_POST['CodigoCita'];
$pn = $_POST['PrimerNombre'];
$sn = $_POST['SegundoNombre'];
$pa = $_POST['PrimerApellido'];
$sa = $_POST['SegundoApellido'];
$t= $_POST['Telefono'];
$ce = $_POST['CorreoElectronico'];
$fn = $_POST['FechaNacimiento'];
$g = $_POST['Genero'];
//actualizar catos 
$actualizar = "UPDATE CITAS SET  PrimerNombre= '$pn', SegundoNombre='$sn', PrimerApellido='$pa', 
SegundoApellido='$sa',Telefono='$t',CorreoElectronico='$ce',FechaNacimiento='$fn', 
Genero='$g' WHERE CodigoCita='$cc'";


$resultado =mysqli_query($conexion, $actualizar );

if ($resultado == true){
    return header("Location: index.php");


   
} else {
    echo " <script> alert('no se pudo actualizar')</script>";
    return header("Location: newedit.php");
    

    }