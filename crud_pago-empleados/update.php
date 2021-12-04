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

$sql = "UPDATE `pago_empleados` SET `nombre`='$nombre',`direccion`='$direccion',`telefono`='$telefono',`fecha_ultimo_pago`='$fecha_ultimo_pago',`ultimo_pago`='$ultimo_pago',`cuenta_bancaria`='$cuenta_bancaria' WHERE codigo = '$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: pago_empleados.php");
} else {

}
?>