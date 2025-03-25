<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
</head>

<body>

    <?php

    $cant = 0;
    
    if (isset($_POST['check1'])) {
        $cant++;
    }
    if (isset($_POST['check2'])) {
        $cant++;
    }
    if (isset($_POST['check3'])) {
        $cant++;
    }
    if (isset($_POST['check4'])) {
        $cant++;
    }

    echo $_POST['nombre'];
    echo " practica $cant deportes."
    ?>

</body>

</html>
