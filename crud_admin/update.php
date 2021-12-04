<?php
include("conexion.php");
$con=conectar();

$gefes_de_area            =$_POST['gefes_de_area'];
$supervisores             =$_POST['supervisores'];
$empleados_generales      =$_POST['empleados_generales'];
$turno                    =$_POST['turno'];
$contadores               =$_POST['contadores'];
$ingenieros_de_software   =$_POST['ingenieros_de_software'];
$codigo                   =$_POST['codigo'];

$sql = "UPDATE `administracion` SET `gefes_de_area`='$gefes_de_area', 'supervisores' = '$supervisores', `empleados_generales`='$empleados_generales', `turno`='$turno', `contadores`='$contadores', `ingenieros_de_software`='$ingenieros_de_software', `codigo`='$codigo' WHERE 'codigo' = '$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: admin.php");
} else {

}
?>