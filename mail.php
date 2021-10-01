<?php
$destino    =   "nicolaseugroberto@gmail.com";
$empresa    =   $_POST["empresa"];
$nombre     =   $_POST["nombre"];
$telefono   =   $_POST["telefono"];
$correo     =   $_POST["correo"];
$mensaje    =   $_POST["mensaje"];
$contenido  =   "Empresa: " . $empresa . "\nNombre: " . $nombre . "\nTeléfono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);

?>