<?php
require 'conexion.php';
session_start();


$usuario = $_POST ['usuario'];
$clave = $_POST ['clave'];
//llamar la base de datos en mysql
$q = "SELECT COUNT(*) as contar from usuarios WHERE usuario = '$usuario'  AND clave = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location: ../vista/paginaprincipal.php");

} else{
    header("location: ../vista/login.php");
}

?>