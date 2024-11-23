<?php
require '../Database/funciones_productos.php';

function agregar_producto(){
    
    if (isset($_POST["nombre_pokemon"]) and !empty($_POST["nombre_pokemon"])) {
        $pokemon_seleccionado = obtener_producto_bd($_POST["nombre_pokemon"]);
        return $pokemon_seleccionado;
    }else return 0;

    if (empty($pokemon_seleccionado)) {
        $sesion_conexion = curl_init(); // Iniciamos la sesion curl para conexiones http
        
        curl_setopt($sesion_conexion, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/".$_POST["nombre_pokemon"]);
        curl_setopt($sesion_conexion, CURLOPT_RETURNTRANSFER, true);

        $response_body = curl_exec($sesion_conexion);

        $valores_obtenidos = json_decode($response_body, true);
        return $valores_obtenidos;
    }
}


?>