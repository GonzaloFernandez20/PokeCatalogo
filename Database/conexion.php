<?php
include './vendor/autoload.php';

$config = parse_ini_file(__DIR__ . '/../config.ini');

$db_host = $config['DB_HOST'];
$db_user = $config['DB_USERNAME'];
$db_pass = $config['DB_PASSWORD'];
$db_name = $config['DB_DATABASE'];

$conexion = null;

function conectar_BD(){

    $conexion = $GLOBALS["conexion"];
    $conexion = mysqli_connect($GLOBALS["db_host"], $GLOBALS["db_user"], $GLOBALS["db_pass"], $GLOBALS["db_name"]);

    // Verificamos si la conexión fue exitosa
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
        echo "No se conecto";
    }
    //echo "Conexión exitosa a la base de datos ".$GLOBALS["db_name"];
    return $conexion;
}

function desconectar_BD(){
    $conexion = $GLOBALS["conexion"];
    if (!empty($conexion)) {
        mysqli_close($conexion);
        $conexion = null;
    }
}


?>