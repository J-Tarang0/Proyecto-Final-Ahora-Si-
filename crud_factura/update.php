<?php
include("conexion.php");
$con=conectar();

$nombre   =$_POST['nombre'];
$apellido =$_POST['apellido'];
$fecha    =$_POST['fecha'];
$rfc      =$_POST['rfc'];
$razon    =$_POST['razon'];
$correo   =$_POST['correo'];
$codigo       =$_POST['codigo'];

$sql = "UPDATE `factura` SET `nombre`='$nombre', 'apellido' = '$apellido', `fecha`='$fecha', `rfc`='$rfc', `razon`='$razon', `correo`='$correo', `codigo`='$codigo' WHERE codigo = '$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: factura.php");
} else {

}
?>