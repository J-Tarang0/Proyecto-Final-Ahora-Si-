<?php 

include("conexion.php");
$con=conectar();

$nombre            =$_POST['nombre'];
$direccion         =$_POST['direccion'];
$telefono          =$_POST['telefono'];
$fecha_ultimo_pago =$_POST['fecha_ultimo_pago'];
$ultimo_pago       =$_POST['ultimo_pago'];
$cuenta_bancaria   =$_POST['cuenta_bancaria'];
$codigo            =$_POST['codigo'];

$sql = "INSERT INTO `pago_empleados`(`nombre`, `direccion`, `telefono`, `fecha_ultimo_pago`, `ultimo_pago`, `cuenta_bancaria`, `codigo`) VALUES ('$nombre','$direccion','$telefono','$fecha_ultimo_pago','$ultimo_pago','$cuenta_bancaria','$codigo')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: pago_empleados.php");
}else{

}

?>