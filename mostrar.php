    <?php include ('config/conexion.php');?>
    <?php include ('templates/header.php');?>

<br><br>
   <a name="" id="" class="btn btn-success" href="formregistro.php" role="button">CREAR USUARIO</a>
   <br> <br>

  <div class="table-responsive-sm">
    <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>TELEFONO</th>
                                        <th>CORREO ELECTRONICO</th>
                                        <th>DIRECCION</th>
                                        <th>PAIS</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                                $consulta='SELECT * FROM contactos'; 
                                                $resultado=mysqli_query($conexion, $consulta);

                                                while($fila=mysqli_fetch_array($resultado)){//Esto es un bucle
                                        ?>
                                            <tr>
                                                <th><?php  echo $fila['id']?></th>
                                                <th><?php  echo $fila['name']?></th>
                                                <th><?php  echo $fila['phone']?></th>
                                                <th><?php  echo $fila['email']?></th>
                                                <th><?php  echo $fila['address']?></th>
                                                <th><?php  echo $fila['country']?></th>
                                                <th><a href="formactualizar.php?id=<?php echo $fila['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
  </div>

  <?php include("templates/footer.php");?>
