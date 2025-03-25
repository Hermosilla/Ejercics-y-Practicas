<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Curso</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombrecur']) && !empty($_POST['nombrecur'])) {
        // Conectar a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "phpfacil") 
            or die("❌ Problemas con la conexión: " . mysqli_connect_error());

        // Evitar inyección SQL
        $nombrecur = mysqli_real_escape_string($conexion, $_POST['nombrecur']);

        // Verificar si el curso existe
        $consulta = "SELECT codigo FROM cursos WHERE nombrecur='$nombrecur'";
        $registros = mysqli_query($conexion, $consulta)
            or die("❌ Problemas en el select: " . mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registros)) {
            // Eliminar curso
            mysqli_query($conexion, "DELETE FROM cursos WHERE nombrecur='$nombrecur'")
                or die("❌ Problemas en el delete: " . mysqli_error($conexion));

            echo "<p>✅ Se efectuó el borrado del curso ingresado.</p>";
        } else {
            echo "<p>⚠️ No existe un curso con dicho nombre.</p>";
        }

        // Cerrar conexión
        mysqli_close($conexion);
    }
    ?>

</body>

</html>
