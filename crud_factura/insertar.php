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

$sql="INSERT INTO factura (`nombre`, `apellido`, `fecha`, `rfc`, `razon`, `correo`, `codigo`) VALUES ('$nombre','$apellido','$fecha','$rfc','$razon','$correo','$codigo')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: factura.php");
}else{

}

?>