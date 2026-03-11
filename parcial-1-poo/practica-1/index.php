<?php

require_once "Usuario.php";

$usuario = new Usuario("Juan Perez","juan@email.com");

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo();

?>