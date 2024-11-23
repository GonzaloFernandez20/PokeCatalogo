<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="../../Public/Assets/statics/comprar_pokemones.css">
</head>
<body>
    <?php

        if ( isset($_POST["pokemon"]) ) {
            $pokemon_ingresado = $_POST["pokemon"];
        }else {
            $pokemon_ingresado = "pikachu";
        }

        //agregar_producto($pokemon_ingresado);
    ?>

    <div class="container">
        <h1>Carrito de Compras</h1>
        <form class="search-form" method="POST">
            <input type="text" name="pokemon" class="search-input" placeholder="Buscar producto..." aria-label="Buscar producto">
            <button type="submit" class="search-button">Buscar</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto 1</td>
                    <td>$19.99</td>
                    <td><button class="delete-button" aria-label="Eliminar Producto 1">Eliminar</button></td>
                </tr>
                <tr>
                    <td>Producto 2</td>
                    <td>$29.99</td>
                    <td><button class="delete-button" aria-label="Eliminar Producto 2">Eliminar</button></td>
                </tr>
                <tr>
                    <td>Producto 3</td>
                    <td>$39.99</td>
                    <td><button class="delete-button" aria-label="Eliminar Producto 3">Eliminar</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

