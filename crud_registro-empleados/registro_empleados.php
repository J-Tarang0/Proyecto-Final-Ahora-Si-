<?php 
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM registro_empleados";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro de Empleados Nuevos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                <h1>Ingrese Datos del Empleado</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Registro No:">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono Celular">
                                    <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC">
                                    <input type="date" class="form-control mb-3" name="fecha-nacimiento" placeholder="Fecha de Nacimiento(D/M/A)">
                                    <input type="text" class="form-control mb-3" name="fecha-registro" placeholder="Fecha de Hoy(D/M/A)">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_mendoza_tarango_cfe/index.php" class="btn btn-primary">Inicio</a></li>
                                </form>
                </div>

                <div class="col-md-8">
                <h1>Empleados Generales</h1>
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombe</th>
                                        <th>Apellido</th>
                                        <th>Telefono Celular</th>
                                        <th>RFC</th>
                                        <th>Fecha de Nacimiento</th>
                                        <th>Fecha</th>
                                        <th>Registro No:</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellido']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['rfc']?></th>
                                                <th><?php  echo $row['fecha-nacimiento']?></th>
                                                <th><?php  echo $row['fecha-registro']?></th>
                                                <th><?php  echo $row['codigo']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                </div>

            </div>
        </div>
    </body>
</html>