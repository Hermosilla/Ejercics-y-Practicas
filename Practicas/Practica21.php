<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
</head>

<body>

    <h2>Lista de Cursos</h2>

    <?php
    // Conexión a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "phpfacil") 
        or die("❌ Error de conexión: " . mysqli_connect_error());

    // Consulta SQL
    $registros = mysqli_query($conexion, "SELECT codigo, nombrecur FROM cursos")
        or die("❌ Error en la consulta: " . mysqli_error($conexion));

    // Verificar si hay resultados
    if (mysqli_num_rows($registros) > 0) {
        while ($reg = mysqli_fetch_assoc($registros)) {
            echo "<p><strong>Código:</strong> " . htmlspecialchars($reg['codigo']) . "<br>";
            echo "<strong>Nombre del curso:</strong> " . htmlspecialchars($reg['nombrecur']) . "</p>";
            echo "<hr>";
        }
    } else {
        echo "<p>No hay cursos registrados.</p>";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
    ?>

</body>

</html>
