<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM administracion WHERE codigo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">

                                    <input type="text" class="form-control mb-3" name="gefes_de_area" placeholder="Gefes de Area" value="<?php echo $row['gefes_de_area']  ?>">
                                    <input type="text" class="form-control mb-3" name="supervisores" placeholder="Supervisores de Turno" value="<?php echo $row['supervisores']  ?>">
                                    <input type="text" class="form-control mb-3" name="empleados_generales" placeholder="Empleados Generales" value="<?php echo $row['empleados_generales']  ?>">
                                    <input type="text" class="form-control mb-3" name="turno" placeholder="Turno (1=Matutino, 2=Vespertino)" value="<?php echo $row['turno']  ?>">
                                    <input type="text" class="form-control mb-3" name="contadores" placeholder="Contadores" value="<?php echo $row['contadores']  ?>">
                                    <input type="text" class="form-control mb-3" name="ingenieros_de_software" placeholder="Sistemas" value="<?php echo $row['ingenieros_de_software']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>