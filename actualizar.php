<?php

include("conexion.php");

$id=$_POST['id'];//el id no se actualiza
$name=$_POST['nombre'];
$phone=$_POST['telefono'];
$email=$_POST['correo'];
$address=$_POST['direccion'];
$country=$_POST['pais'];

$actualizar="UPDATE contactos SET  name='$name',phone='$phone', email='$email',address='$address',country='$country' WHERE id='$id'";
$resultado=mysqli_query($conexion,$actualizar);

    if($resultado){
        Header("Location: mostrar.php");
    }
?>