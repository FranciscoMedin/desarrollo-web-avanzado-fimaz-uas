 <?php

require_once "clases/Admin.php";
require_once "clases/Alumno.php";

$usuarios = [];

try{

    $usuarios[] = new Admin("Paco Morales","admin@gmail.com");
    $usuarios[] = new Alumno("Anuar castro","ancastro@gmail.com","A001");

    $usuarios[] = new Alumno("Error Usuario","correo_invalido","A999");

}catch(Exception $e){

    echo "<p style='color:red'>Error controlado: ".$e->getMessage()."</p>";

}

?>

<h2>Tabla de Usuarios</h2>

<table border="1">
<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
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

</tr>

<?php endforeach; ?>

</table>
