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

$sql = "UPDATE `registro_empleados` SET `nombre`='$nombre',`apellido`='$apellido',`telefono`='$telefono',`rfc`='$rfc',`fecha-nacimiento`='$fecha_nacimiento',`fecha-registro`='$fecha_registro' WHERE codigo ='$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: registro_empleados.php");
} else {

}
?>