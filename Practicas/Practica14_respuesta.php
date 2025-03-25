<?php
/*
* PRACTICA 14 – Formulario (área de texto de control)
* Confeccionar una página que muestre un contrato dentro de un área de texto, disponiendo puntos suspensivos
* donde el operador debe ingresar un texto. La página que procesa el formulario solo debe mostrar el
* contrato con las modificaciones que hizo el operador.
*/

// Obtener datos del formulario mediante $_POST
$ciudad = $_POST['ciudad'] ?? '________';
$empresa = $_POST['empresa'] ?? '________';
$jefe = $_POST['senior'] ?? '________';
$calle = $_POST['calle'] ?? '________';
$usted = $_POST['usted'] ?? '________';
$domicilio = $_POST['domicilio'] ?? '________';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 14 - Respuesta</title>
</head>

<body>

    <div style="text-align: center;">
        <h1>Contrato con sus datos personales</h1>
        <p>
            En la ciudad de <strong><?php echo $ciudad; ?></strong>, se acuerda entre la empresa <strong><?php echo $empresa; ?></strong>, 
            representada por el Sr. <strong><?php echo $jefe; ?></strong> en su carácter de Apoderado, con domicilio en la calle 
            <strong><?php echo $calle; ?></strong>, y el Sr. <strong><?php echo $usted; ?></strong>, futuro empleado con domicilio en 
            <strong><?php echo $domicilio; ?></strong>, celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente 
            de los artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </p>
    </div>

</body>

</html>
