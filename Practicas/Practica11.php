<?php
/*
* Confeccionar un formulario que solicita la carga de un nombre de persona y su edad, luego mostrar en
* otra pagina si es mayor de edad (si la edad es mayor o igual a 18).
*/
?>
<html>
    <cabeza>
        Práctica 11
    </cabeza>
    <cuerpo>
        <centro>
        Práctica 11
    
        <form action='practica11_respuesta.php' method="post">
            Nombre: <input type="text" name='nombre' placeholder="Nombre">
            <br><br>
            Edad: <input type="text" name='edad' placeholder="Edad">
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </centro>
    </cuerpo>
</html>