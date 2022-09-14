<?php 
    include("config/conexion.php");

$id=$_GET['id'];//por el metodo get capturamos el id del contacto

$consulta="SELECT * FROM contactos WHERE id='$id'";
$resultado=mysqli_query($conexion, $consulta);

$fila=mysqli_fetch_array($resultado);
?>

<?php
include("templates/header.php");
?>
                  <div class="row align-items-start">
                     <div class="col"></div>
                     <div class="col">
                         <br><br> <br>
                        <h2  align="center">ACTUALIZAR</h2>
                       <br>

                        <form action="actualizar.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $fila['id']  ?>">
                                
                                <div class="mb-3">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $fila['name']  ?>">
                                </div>                                

                                <div class="mb-3">
                                <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value="<?php echo $fila['phone']  ?>">
                                </div>

                                <div class="mb-3">
                                <input type="e-mail" class="form-control" name="correo" placeholder="Correo" value="<?php echo $fila['email']  ?>">
                                </div>  

                                 <div class="mb-3">
                                <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="<?php echo $fila['address']  ?>">
                                </div>  

                                <div class="mb-3">
                                <input type="text" class="form-control" name="pais" placeholder="País" value="<?php echo $fila['country']  ?>">
                                 </div>  

                                <div class="mb-3" align="center">
                                  <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
                                </div>
                                
                         </form>

                </div>
                <div class="col"></div>
                </div>
 
<?php include("templates/footer.php"); ?>

