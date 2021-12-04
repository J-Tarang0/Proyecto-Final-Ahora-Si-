<?php 

include("conexion.php");
$con=conectar();

$nombre           =$_POST['nombre'];
$apellido         =$_POST['apellido'];
$telefono         =$_POST['telefono'];
$rfc              =$_POST['rfc'];
$fecha_nacimiento =$_POST['fecha-nacimiento'];
$fecha_registro   =$_POST['fecha-registro'];
$codigo           =$_POST['codigo'];

$sql="INSERT INTO `registro_empleados`(`codigo`, `nombre`, `apellido`, `telefono`, `rfc`, `fecha-nacimiento`, `fecha-registro`) 
VALUES ('$codigo','$nombre','$apellido','$telefono','$rfc','$fecha_nacimiento','$fecha_registro')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: registro_empleados.php");
}else{

}

?>