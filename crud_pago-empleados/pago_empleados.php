<?php 
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM pago_empleados";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Página Factura</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                <h1>Ingrese Datos Nominales</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="date" class="form-control mb-3" name="fecha_ultimo_pago" placeholder="Fecha del Ultimo Pago">
                                    <input type="text" class="form-control mb-3" name="ultimo_pago" placeholder="Monto del Ultimo Pago">
                                    <input type="text" class="form-control mb-3" name="cuenta_bancaria" placeholder="Cuenta Bancaria">
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Consulta No">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_mendoza_tarango_cfe/index.php" class="btn btn-primary">Inicio</a></li>
                                </form>
                </div>

                <div class="col-md-8">
                <h1>Nominas</h1>
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombe</th>
                                        <th>Dirección</th>
                                        <th>Telefono</th>
                                        <th>Fecha del Ultimo Pago</th>
                                        <th>Monto del Ultimo Pago</th>
                                        <th>Cuenta Bancaria</th>
                                        <th>Consulta No</th>
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
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['fecha_ultimo_pago']?></th>
                                                <th><?php  echo $row['ultimo_pago']?></th>
                                                <th><?php  echo $row['cuenta_bancaria']?></th>
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