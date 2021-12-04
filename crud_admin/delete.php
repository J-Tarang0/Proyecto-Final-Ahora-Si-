<?php

include("conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM `administracion` WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: admin.php");
    }
?>