<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Public/Assets/statics/Pokemones.css">
        <title>Pokemones</title>
    </head>
    <body>
        <?php
        $sesion_conexion = curl_init(); // Iniciamos la sesion curl para conexiones http

        if ( isset($_POST["pokemon"]) ) {
            $pokemon_ingresado = $_POST["pokemon"];
        }else {
            $pokemon_ingresado = "pikachu";
        }
        
        curl_setopt($sesion_conexion, CURLOPT_URL, "https://pokeapi.co/api/v2/pokemon/".$pokemon_ingresado);
        curl_setopt($sesion_conexion, CURLOPT_RETURNTRANSFER, true);

        $response_body = curl_exec($sesion_conexion);

        $valores_obtenidos = json_decode($response_body, true);

        $pokemon_nombre = $valores_obtenidos["name"];
        $pokemon_tipo = $valores_obtenidos["types"][0]["type"]["name"];
        $pokemon_altura = $valores_obtenidos["height"] / 10;
        $pokemon_peso = $valores_obtenidos["weight"] / 10;
        $pokemon_habilidad = $valores_obtenidos["abilities"][0]["ability"]["name"];

        curl_close($sesion_conexion);
        ?>

        <div class="container">
            <h1>Buscador de Pokémon</h1>
            <form class="search-form" method="POST">
                <input type="text" name="pokemon" class="search-input" placeholder="<?= $pokemon_nombre; ?>" required>
                <button type="submit" class="search-button">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </form>

            <div class="pokemon-info">
                <h2>Información del Pokémon</h2>
                <p><span>Nombre:</span> <?= $pokemon_nombre; ?></p>
                <p><span>Tipo:</span> <?= $pokemon_tipo; ?></p>
                <p><span>Altura:</span> <?= $pokemon_altura; ?> m</p>
                <p><span>Peso:</span> <?= $pokemon_peso; ?> kg</p>
                <p><span>Habilidad:</span> <?= $pokemon_habilidad; ?></p>
            </div>
        </div>
    </body>
</html>