 <?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

try {

    $admin = new Admin("Carlos Lopez","admin@email.com");

    echo "Nombre: ".$admin->getNombre()."<br>";
    echo "Correo: ".$admin->getCorreo()."<br>";
    echo "Rol: ".$admin->getRol()."<br><br>";

} catch(Exception $e){

    echo "Error: ".$e->getMessage();

}

try {

    $alumno = new Alumno("Ana Torres","correo_invalido", "2023001");

    echo "Nombre: ".$alumno->getNombre()."<br>";
    echo "Correo: ".$alumno->getCorreo()."<br>";
    echo "Rol: ".$alumno->getRol()."<br>";
    echo "Matricula: ".$alumno->getMatricula();

} catch(Exception $e){

    echo "Error detectado: ".$e->getMessage();

}

?>
