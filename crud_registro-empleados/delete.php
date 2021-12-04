<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM `registro_empleados` WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro_empleados.php");
    }
?>