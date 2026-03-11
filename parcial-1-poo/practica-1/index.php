<?php

require_once "Usuario.php";

$usuario = new Usuario("Luis Castro","lucas@gmail.com");

echo "Nombre: " . $usuario->getNombre() . "<br>";
echo "Correo: " . $usuario->getCorreo();

?>