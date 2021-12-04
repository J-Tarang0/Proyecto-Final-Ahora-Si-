<?php 

include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM administracion";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Administracion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row">

                <div class="col-md-3">
                <h1>Ingrese datos de Empleados Administrativos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="gefes_de_area" placeholder="Gefes de Area">
                                    <input type="text" class="form-control mb-3" name="supervisores" placeholder="Supervisores de Turno">
                                    <input type="text" class="form-control mb-3" name="empleados_generales" placeholder="Empleados Generales">
                                    <input type="text" class="form-control mb-3" name="turno" placeholder="Turno (1=Matutino, 2=Vespertino)">
                                    <input type="text" class="form-control mb-3" name="contadores" placeholder="Contadores">
                                    <input type="text" class="form-control mb-3" name="ingenieros_de_software" placeholder="Sistemas">
                                    <input type="text" class="form-control mb-3" name="codigo" placeholder="Registro No">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/proyecto_mendoza_tarango_cfe/index.php" class="btn btn-primary">Inicio</a></li>
                                </form>
                                 
                </div>

                <div class="col-md-8">
                <h1>Empleados Administrativos</h1>
                <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Gefes de Area</th>
                                        <th>Supervisores de Turno</th>
                                        <th>Empleados Generales</th>
                                        <th>Turno</th>
                                        <th>Contadores</th>
                                        <th>Ingenieros en Sistemas</th>
                                        <th>Registro No</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['gefes_de_area']?></th>
                                                <th><?php  echo $row['supervisores']?></th>
                                                <th><?php  echo $row['empleados_generales']?></th>
                                                <th><?php  echo $row['turno']?></th>
                                                <th><?php  echo $row['contadores']?></th>
                                                <th><?php  echo $row['ingenieros_de_software']?></th>
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