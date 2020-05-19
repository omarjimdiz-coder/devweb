<?php

//Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];
$coti = $_POST['cotizacion'];
$comen = $_POST['comentario'];
$mensaje = $_POST['mensaje'];


// Datos para el correo
$destinatario = "devweb.consultorias@gmail.com";
$asunto = "Contacto de Cliente";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Asunto: $coti or $comen \n";
$carta .= "Mensaje: $mensaje";

//Enviando el mensaje

mail($destinatario, $asunto, $carta);
header('Location:mensaje.html')

?>