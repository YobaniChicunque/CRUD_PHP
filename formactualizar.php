<?php 
    include("conexion.php");

$id=$_GET['id'];

$actualizar="SELECT * FROM contactos WHERE id='$id'";
$resultado=mysqli_query($conexion, $actualizar);

$row=mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--bootstrap-5.1.3 -->
  <link rel="stylesheet" href="static/bootstrap-5.1.3/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
                  <div class="container mt-5">
                    <form action="actualizar.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['name']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['phone']  ?>">
                                <input type="e-mail" class="form-control mb-3" name="correo" placeholder="Correo" value="<?php echo $row['email']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['address']  ?>">
                                <input type="text" class="form-control mb-3" name="pais" placeholder="País" value="<?php echo $row['country']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
                    <!-- jquery-->
    <script type="text/javascript" src="static/bootstrap-5.1.3/js/jquery-3.6.1.min.js"></script>
  <!-- javascript-->
    <script type="text/javascript" src="static/bootstrap-5.1.3/js/bootstrap.min.js"></script>
</body>
</html>


