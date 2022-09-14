<?php
  session_start();

if($_REQUEST){

include("config/conexion.php");
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$pais=$_REQUEST['pais'];


$insertar="INSERT INTO contactos  (name,phone,email,address,country) VALUES ('$nombre','$telefono','$correo','$direccion','$pais')";
$resultado=mysqli_query($conexion,$insertar);
    
  if($resultado){
    echo'<script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href="mostrar.php";
    </script>';
  }

}else{
    header('location:formregistro.php');
}


?>