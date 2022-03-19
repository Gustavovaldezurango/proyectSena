<?php
include("cn.php");

$cc = $_GET['CodigoCita'];

$eliminar = "DELETE FROM citas WHERE CodigoCita ='$cc'";

$resultadoeliminar = mysqli_query($conexion, $eliminar ) or
die("Problemas en el select:" . mysqli_error($conexion));


if($resultadoeliminar){
    header("location: index.php");
}else {
    echo " <script> alert('no se pudo eliminar');</script>";
    return header("Location: newedit.php");
}
?>
