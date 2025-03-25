<html>
<head>
<title>El gran agujero de seguridad</title>
</head>
<body>
<h2>Agujero de seguridad en register_globals = On</h2>
<form action="33_seguridad.php" method="post">
    Contraseña: <input type="password" name="pass">
    <input type="submit" value="Enviar">
</form>

<?php
$login = false;

if (isset($_POST['pass']) && $_POST['pass'] === "abc_xyz_123") {
    $login = true;
}

if ($login) {
    echo "<p>Aquí empieza el arma secreta.</p>";
}
?>
</body>
</html>

