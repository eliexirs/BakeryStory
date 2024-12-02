<?php

$server = "localhost";
$user = "root";
$pass = "tyjo1801";
$bd = "bakerystory";

$conexion = new mysqli($server, $user, $pass, $bd);

if($conexion->connect_error){
    die("La conexión ha fallado" . $conexion->connect_error);
} 
?>