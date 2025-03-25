<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "phpfacil") or
    die("Problemas con la conexión");

  mysqli_query($conexion, "insert into cursos(nombrecur) values ('$_POST[nombrecurso]')") or
    die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El curso fue dado de alta.";
  ?>
</body>
</html>