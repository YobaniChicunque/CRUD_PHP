<?php
$conexion = new mysqli(
"localhost",//host
"root",//user
"",//password
"prueba",//name database
3306//port
);

if($conexion->connect_errno){
    echo "Falló la conexión a la base de datos";
}

?>