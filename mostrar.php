<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--bootstrap-5.1.3 -->
  <link rel="stylesheet" href="static/bootstrap-5.1.3/css/bootstrap.min.css">
    <?php
   include ('conexion.php');
   ?>

  <title>Mostrar</title>
</head>
<body class="container">

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
                                                $resultado='SELECT * FROM contactos'; 
                                                $res=mysqli_query($conexion, $resultado);

                                                while($row=mysqli_fetch_array($res)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['name']?></th>
                                                <th><?php  echo $row['phone']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><?php  echo $row['address']?></th>
                                                <th><?php  echo $row['country']?></th>
                                                <th><a href="formactualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
  </div>
  
  




    <!-- jquery-->
    <script type="text/javascript" src="static/bootstrap-5.1.3/js/jquery-3.6.1.min.js"></script>
  <!-- javascript-->
    <script type="text/javascript" src="static/bootstrap-5.1.3/js/bootstrap.min.js"></script>
</body>
</html>