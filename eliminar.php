<html>

<head>
  <title>Problema</title>
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "gustavo") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion,"SELECT codigoCita from citas
  where CorreoElectronico='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, " DELETE from citas where CorreoElectronico ='$_REQUEST[mail]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
     
    return header("Location: index.php");
  } else {
    echo "No existe un alumno con ese mail.";
  }
  mysqli_close($conexion);
  ?>
  <a href="index.php"><input type="button" value="volver"></a>
</body>

</html>