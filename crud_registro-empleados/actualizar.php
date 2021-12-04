<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro_empleados WHERE codigo='$id'";
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
        <title>Actualizar Datos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido" value="<?php echo $row['apellido']  ?>">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono Celular" value="<?php echo $row['telefono']  ?>">
                                    <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC" value="<?php echo $row['rfc']  ?>">
                                    <input type="date" class="form-control mb-3" name="fecha-nacimiento" placeholder="Fecha de Nacimiento(D/M/A)" value="<?php echo $row['fecha-nacimiento']  ?>">
                                    <input type="text" class="form-control mb-3" name="fecha-registro" placeholder="Fecha de Hoy(D/M/A)" value="<?php echo $row['fecha-registro']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>