<?php

/*
* PRACTICA 14 – Formulario (área de texto de control)
Confeccionar una página que muestre un contrato dentro de un área de texto, disponiendo puntos suspensivos
donde el operador debe ingresar un texto. La pagina que procesa el formulario solo debe mostrar el
contrato con las modificaciones que hizo el operador.
*/
?>
<html>
    <cabeza>
        Práctica 14
        
    </cabeza>
    <cuerpo>
    <centro>
        <h1>Completa el siguiente contrato con sus datos personales</h1>
        
        <form action='practica14_respuesta.php' method='post'>
            <p align='center'>
            En la ciudad de <input type="text" name='ciudad' placeholder="ciudad">, se acuerda entre la Empresa <input type="text" name='empresa' placeholder="empresa"> representada por el Sr. <input type="text" name='senior' placeholder="su jefe"> en su carácter
de Apoderado, con domicilio en la calle <input type="text" name='calle' placeholder="calle"> y el Sr. <input type="text" name='usted' placeholder="su nombre">, futuro empleado con domicilio en <input type="text" name='domicilio' placeholder="domicilio">,
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90, 92, 93,
94, 95 y concordantes de la Ley de Contrato de Trabajo No. 20744.
        </p>
        <input type='submit'value="Enviar">
        </form>
    </centro>
    </cuerpo>
</html>