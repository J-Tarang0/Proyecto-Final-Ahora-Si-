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

$sql="INSERT INTO administracion (`gefes_de_area`, `supervisores`, `empleados_generales`, `turno`, `contadores`, `ingenieros_de_software`, `codigo`) VALUES ('$gefes_de_area','$supervisores','$empleados_generales','$turno','$contadores','$ingenieros_de_software','$codigo')";
$query=mysqli_query($con,$sql);

if ($query) {
    header("location: admin.php");
}else{

}

?>