<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-5.1.3 -->
  <link rel="stylesheet" href="static/bootstrap-5.1.3/css/bootstrap.min.css">
  <title>Document</title>
  <? session_start(); ?>
</head>
<body class="container">

     <div  class="row align-items-start">
         <div class="col"></div>
         <div class="col">
            <br><br> <br>
              <h2> FORMULARIO DE REGISTRO</h2>
              <br>
                 <form action="registrar.php" method="POST">
                    <div class="mb-3">
                      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder=" Nombre" required>
                     </div>
                     <div class="mb-3">
                      <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder=" Telefono" required>
                     </div>
                     <div class="mb-3">
                      <input type="e-mail" class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder=" E-mail"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="helpId" placeholder=" Direccion de Residencia"required>
                     </div>
                     <div class="mb-3">
                      <input type="text" class="form-control" name="pais" id="pais" aria-describedby="helpId" placeholder=" Pais de Origen"required>
                     </div>
                     <div class="mb-3" align="center">
                      <button type="submit" class="btn btn-success">Enviar Informacion</button>
                     </div>
                 </form>
         </div>

         <div class="col"></div>

     </div>
  
    <!-- jquery-->
    <script type="text/javascript" src="static/bootstrap-5.1.3/js/jquery-3.6.1.min.js"></script>
  <!-- javascript-->
    <script type="text/javascript" src="static/bootstrap-5.1.3/js/bootstrap.min.js"></script>
</body>
</html>