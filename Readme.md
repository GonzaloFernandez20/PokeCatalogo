### Resumen del Proyecto: **Catálogo de Pokemones con PokeAPI**

#### **Objetivo:**
[V1]: Crear una aplicación web que permita buscar información de cualquier Pokémon en tiempo real utilizando la [PokeAPI](https://pokeapi.co/), y mostrar datos relevantes como nombre, tipo, altura, peso y habilidades.

---

#### **Tecnologías Utilizadas:**
1. **Frontend:**
   - HTML para la estructura de la página.
   - CSS para el diseño.
   - JavaScript para validaciones y mejorar la interacción del formulario.

2. **Backend:**
   - **PHP**:
     - Para gestionar las solicitudes al servidor y conectarse con la API.
     - Decodificar los datos obtenidos de la API y enviarlos al frontend.

3. **API Externa:**
   - **PokeAPI**:
     - Provee datos en formato JSON sobre los Pokémon.

4. **Servidor Local:**
   - XAMPP o similar para levantar el servidor PHP y servir el proyecto.

---

#### **Funcionalidades Clave:**
1. **Formulario de Búsqueda:**
   - Un campo de entrada permite al usuario buscar un Pokémon por su nombre o ID.
   - Un botón activa la búsqueda.

2. **Conexión con PokeAPI:**
   - Utiliza `cURL` en PHP para enviar una solicitud `GET` a la URL de la API correspondiente al Pokémon ingresado.

3. **Procesamiento de Datos:**
   - Decodificación de la respuesta JSON.
   - Extracción de atributos específicos:
     - **Nombre** (`name`).
     - **Tipo** (`types[0].type.name`).
     - **Altura** (`height`, convertido a metros).
     - **Peso** (`weight`, convertido a kilogramos).
     - **Habilidad** (`abilities[0].ability.name`).

4. **Visualización de Resultados:**
   - Información mostrada dinámicamente en un diseño estructurado, con detalles organizados en una sección de "Información del Pokémon".

---

#### **Desafíos Técnicos y Soluciones:**
1. **Manejo de Errores de Búsqueda:**
   - Si el Pokémon no existe o se ingresa mal, se debe manejar la respuesta de la API para mostrar un mensaje de error.
   - Solución pendiente: Verificar si el código de respuesta es `404` y mostrar un mensaje amigable.

2. **Validación del Formulario:**
   - Uso de validaciones mínimas en HTML5 para asegurar que el usuario ingrese datos válidos.

3. **Cálculo de Altura y Peso:**
   - Conversiones necesarias, ya que los valores de la API están en decímetros y hectogramos.

---

#### **Futuras Mejoras:**

1. **Galería de imagenes:**
   - Mostrar la imagen oficial del Pokémon (usando `sprites.front_default` de la API).

2. **Carrito de compras de pokemones:**
   - Implementar un carrito de compras ficticio donde se puedan comprar diferentes pokemones

3. **Base de datos de compras**
   - Implementar una base de datos para almacenar todas las compras que se vayan haciendo.

4. **Reportes de compras**
   - Desarrollar un componente que se conecte a la base de datos y genere un reporte de las ventas.

5. **Conexiones con diferentes servicios**
   - Conectar la aplicacion con diferentes microservicios, ejemplo: Servicios de mail

6. **Mapa de pokemones**
   - Desarrollar un mapa interactivo donde se pueda observar la ubicacion de los diferentes pokemones