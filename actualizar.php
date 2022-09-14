<?php
session_start();
include("config/conexion.php");

$id=$_REQUEST['id'];//el id no se actualiza
$nombre=$_REQUEST['nombre'];
$telefono=$_REQUEST['telefono'];
$correo=$_REQUEST['correo'];
$direccion=$_REQUEST['direccion'];
$pais=$_REQUEST['pais'];

$consulta="UPDATE contactos SET  name='$nombre',phone='$telefono', email='$correo',address='$direccion',country='$pais' WHERE id='$id'";
$resultado=mysqli_query($conexion,$consulta);

    if($resultado){
        Header("Location: mostrar.php");
    }
?>