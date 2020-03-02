<?php
require 'conexion.php';
session_start();

$usuario = $_POST ['usuario'];
$contrasena = $_POST ['contrasena'];

$host  = "localhost";
$usuariobd  = "root";
$pass = "";
$contrasena = "";
$bd = "technet";

try {
    $con = new PDO('mysql:host=localhost;dbname='. $bd, $usuariobd, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $usuario = $_POST ['usuario'];
    $contrasena = $_POST ['contrasena'];

    $q = "SELECT p.nombre AS nombre_perfil, pe.* 
    FROM perfil p
    INNER JOIN persona_perfil pp
    ON p.ID_perfil = pp.ID_perfil
    INNER JOIN persona pe
    ON pe.ID_persona = pp.ID_persona
    WHERE nombre_usuario = :usuario  AND contrasena = :contrasena";

    $stmt = $con->prepare(
        $q
    );

    $stmt->execute(array(
        ':usuario' => $usuario,
        ':contrasena' => $contrasena
    ));

    while( $datos = $stmt->fetch() )
        echo $datos[0] . '<br />';
} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}



////llamar la base de datos en mysql
//$q = "SELECT p.nombre AS nombre_perfil, pe.*
//FROM perfil p
//INNER JOIN persona_perfil pp
//ON p.ID_perfil = pp.ID_perfil
//INNER JOIN persona pe
//ON pe.ID_persona = pp.ID_persona
//WHERE nombre_usuario = '$usuario'  AND contrasena = '$contrasena'";
//
//$consulta = mysqli_query($conexion, $q);
//$array = mysqli_fetch_array($consulta);


//var_dump($datos);
//if(empty($array)){
//    echo "error, credenciales incorrectas";
//}else{
//    $_SESSION['datos_personales'] = $array;
//    header("Location: ../vista/usuario.php");
//}

?>