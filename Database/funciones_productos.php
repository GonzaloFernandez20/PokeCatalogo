<?php
require './conexion.php';

// Aca van todas la operaciones que conlleven hacer una query a la BD

function obtener_producto_bd($nombre_producto){
    $conexion = conectar_BD();

    $query = "SELECT * FROM pokemons WHERE nombre LIKE '%$nombre_producto%'";
    $resultado = mysqli_query($conexion, $query);

    desconectar_BD();

    return $resultado;
}


function agregar_producto_bd($pokemon){
    $conexion = conectar_BD();

    $pokemon_nombre = $pokemon["name"];
    $pokemon_tipo = $pokemon["types"][0]["type"]["name"];
    $pokemon_altura = $pokemon["height"] / 10;
    $pokemon_peso = $pokemon["weight"] / 10;
    $pokemon_habilidad = $pokemon["abilities"][0]["ability"]["name"];

    $query = "INSERT INTO pokemons (nombre, tipo, altura, peso, habilidad)
              VALUES (".$pokemon_nombre.", ".$pokemon_tipo.",".$pokemon_altura.", ".$pokemon_peso.", ".$pokemon_habilidad."); ";

    $resultado = mysqli_query($conexion, $query);
    desconectar_BD();

    return $resultado;
}



?>