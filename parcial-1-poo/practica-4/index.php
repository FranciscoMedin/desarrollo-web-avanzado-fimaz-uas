 <?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";
require_once "clases/Invitado.php";

$usuarios = [];

try{

    $usuarios[] = new Admin("Carlos Lopez","admin@email.com");
    $usuarios[] = new Alumno("Ana Torres","ana@email.com","A001");
    $usuarios[] = new Invitado("Luis Perez","luis@empresa.com","TechCorp");

    // Usuario con correo inválido
    $usuarios[] = new Alumno("Error Usuario","correo_invalido","A999");

}catch(Exception $e){

    echo "<p style='color:red'>Error controlado: ".$e->getMessage()."</p>";

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de Usuarios</title>
</head>
<body>

<h2>Tabla de Usuarios</h2>

<table border="1" cellpadding="5">
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
<th>Empresa</th>
</tr>

<?php foreach($usuarios as $u): ?>

<tr>
<td><?php echo $u->getNombre(); ?></td>
<td><?php echo $u->getCorreo(); ?></td>
<td><?php echo $u->getRol(); ?></td>

<td>
<?php
if(method_exists($u,"getMatricula")){
echo $u->getMatricula();
}else{
echo "—";
}
?>
</td>

<td>
<?php
if(method_exists($u,"getEmpresa")){
echo $u->getEmpresa();
}else{
echo "—";
}
?>
</td>

</tr>

<?php endforeach; ?>

</table>

</body>
</html>
