<?php
include("conexion.php");

$id=$_GET['id'];//por el metodo get capturamos el id del contacto

$eliminar="DELETE FROM contactos  WHERE id='$id'";
$resultado=mysqli_query($conexion,$eliminar);

    if($resultado){
        Header("Location: mostrar.php");
    }
?>