<?php
session_start();
include("templates/header.php");
?>

     <div  class="row align-items-start">
         <div class="col"></div>
         <div class="col">
            <br><br> <br>
              <h2  align="center">REGISTRARSE</h2>
              <br>
                 <form action="registrar.php" method="POST">
                    <div class="mb-3">
                      <input type="text" class="form-control"  name="nombre"placeholder=" Nombre" required autofocus>
                     </div>
                     <div class="mb-3">
                      <input type="number" class="form-control" name="telefono" placeholder=" Teléfono" required>
                     </div>
                     <div class="mb-3">
                      <input type="e-mail" class="form-control" name="correo" placeholder=" E-mail"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="direccion" placeholder=" Dirección de Residencia"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="pais" placeholder=" Pais de Origen"required>
                     </div>
                     <div class="mb-3" align="center">
                      <button type="submit" class="btn btn-success">Enviar</button>
                     </div>
                 </form>
         </div>

         <div class="col"></div>

     </div>

<?php include("templates/footer.php"); ?>
  
