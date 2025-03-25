<html>
    <head>
    <title>Consulta de Alumnos</title>
    </head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre']) && !empty($_POST['nombre'])) {
        // Conectar a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "alumnos") 
            or die("❌ Problemas con la conexión: " . mysqli_connect_error());

        // Evitar inyección SQL
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);

        // Consulta a la base de datos
        $consulta = "SELECT nombre, codigocurso FROM alumnos WHERE nombre='$nombre'";
        $registros = mysqli_query($conexion, $consulta)
            or die("❌ Problemas en el select: " . mysqli_error($conexion));

        // Contador de resultados
        $cant = 0;

        while ($reg = mysqli_fetch_assoc($registros)) {
            echo "<p><strong>Nombre:</strong> " . htmlspecialchars($reg['nombre']) . "<br>";
            echo "<strong>Curso:</strong> ";
            switch ($reg['codigocurso']) {
                case 1:
                    echo "PHP";
                    break;
                case 2:
                    echo "ASP";
                    break;
                case 3:
                    echo "JSP";
                    break;
                default:
                    echo "Desconocido";
            }
            echo "</p><hr>";
            $cant++;
        }

        if ($cant == 0) {
            echo "<p>No existen alumnos con dicho nombre.</p>";
        }

        // Cerrar conexión
        mysqli_close($conexion);
    }
    ?>

</body>

</html>
