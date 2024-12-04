<?php
include("conexion.php");

$id_usuario = $_POST['id_usuario'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$email = $_POST['email'];
$fecha_nac = $_POST['fecha_nac'];

$sql="UPDATE usuario SET nombres = '$nombres', apellidos = '$apellidos', usuario = '$usuario', contraseña = '$contraseña', email = '$email', fecha_nac='$fecha_nac' WHERE id_usuario = '$id_usuario'";
$query=mysqli_query($conexion,$sql);

if($query){
    Header("Location: usuario.php");
}

mysqli_close($conexion);
?>