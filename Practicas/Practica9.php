<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 9</title>
</head>
<body>
    <h1>Práctica 9</h1>
    <p>
        Generar un valor aleatorio entre 1 y 5. Luego imprimir en castellano el número (Ej. Si se genera el 3,
        luego mostrar en la página la cadena “tres”).
    </p>

    <?php
    $aleatorio = rand(1, 5);
    $arreglo = array("uno", "dos", "tres", "cuatro", "cinco");

    echo "Número aleatorio: $aleatorio<br>";

    for ($i = 0; $i < 5; $i++) {
        if ($aleatorio == $i + 1) {
            echo "Número en letra: " . $arreglo[$i];
        }
    }
    ?>
</body>
</html>
