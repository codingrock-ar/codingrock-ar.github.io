Site Made with (L)

Índice:

Introducción a PHP 8

Breve historia y contexto del lenguaje.

Sintaxis y Estructuras Básicas
    Variables y tipos de datos.
    Operadores.
    Estructuras de control (if, else, switch, etc.).
    Bucles (for, while, foreach).

Funciones
    Declaración y uso de funciones.
    Argumentos y devoluciones de funciones.
    Funciones anónimas y flecha.

Novedades en PHP 8
    JIT Compiler.
    Union Types.
    Named Arguments.
    Otros cambios significativos.

Gestión de Errores y Excepciones
    Manejo de errores.
    Uso de excepciones.
    Trabajo con Formularios y Datos Externos

Procesamiento de formularios.
    Seguridad en la entrada de datos.
    Acceso a Bases de Datos
    Conexión y consulta a bases de datos MySQL u otros sistemas.

Interacción con Archivos
    Lectura y escritura de archivos.
    Manipulación de archivos y directorios.
    Integración con HTML y Estilos

Uso de Arrays en PHP
    Definición y uso de arrays.
    Funciones para trabajar con arrays.

Arrays Especiales en PHP
    Arrays asociativos.
    Arrays multidimensionales.
    Arrays superglobales.

Trabajo con Sesiones y Cookies
    Uso de sesiones para mantener datos entre solicitudes.
    Almacenamiento y gestión de cookies en PHP.

Métodos HTTP (GET, POST, PUT, DELETE)
    Uso y diferencias entre GET, POST, PUT y DELETE.
    Implementación en PHP para procesar solicitudes HTTP.

Uso de PHP en páginas web.
    Introducción al PHP en la capa de presentación.
    Conclusiones y Recursos Adicionales

Resumen final.
    Recursos recomendados para aprender más sobre PHP 8.




Argumentos y devoluciones de funciones:
Las funciones pueden aceptar argumentos y devolver valores, lo que ofrece flexibilidad en la programación.

Funciones anónimas y flecha:
PHP 8 introduce funciones anónimas y la sintaxis de flecha (fn) para escribir funciones más concisas y expresivas.

4. Novedades en PHP 8:
JIT Compiler:
El compilador JIT (Just-In-Time) en PHP 8 mejora el rendimiento al compilar el código durante la ejecución.

Union Types:
Permite definir múltiples tipos para 
// Crear un array multidimensional
$multiArray = array(
    array("Manzana", "Banana"),
    array("Naranja", "Pera"),
    array("Fresa", "Kiwi")
);

// Acceder a elementos del array multidimensional
echo $multiArray[0][1]; // Muestra: Banana


Arrays superglobales:
Son arrays predefinidos en PHP y están disponibles en todos los ámbitos del script. Algunos ejemplos son $_GET, $_POST, $_SESSION, que contienen datos enviados por formularios, sesiones, etc.

// Acceder a datos de un formulario enviado por el método GET
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "Hola, $nombre";
}


11. Trabajo con Sesiones y Cookies:
Uso de sesiones para mantener datos entre solicitudes:
Las sesiones en PHP permiten almacenar datos del usuario a lo largo de múltiples páginas web durante una visita. Se inician con session_start() y pueden guardar información en $_SESSION.

Almacenamiento y gestión de cookies en PHP:
Las cookies son pequeños archivos almacenados en el lado del cliente. PHP permite su creación, modificación y eliminación mediante funciones como setcookie() y $_COOKIE.

12. Métodos HTTP (GET, POST, PUT, DELETE):
Uso y diferencias entre GET, POST, PUT y DELETE:
GET: Utilizado para solicitar datos de un recurso.
POST: Utilizado para enviar datos al servidor para ser procesados.
PUT: Utilizado para actualizar datos existentes en el servidor.
DELETE: Utilizado para eliminar datos en el servidor.
Implementación en PHP para procesar solicitudes HTTP:
PHP puede recibir y procesar solicitudes HTTP GET y POST a través de $_GET y $_POST, respectivamente. La implementación de PUT y DELETE se puede simular utilizando métodos alternativos o bibliotecas adicionales.



Sintaxis y Estructuras Básicas

// Declaración de variables
$numero = 10;
$nombre = "Pedro";
$verdadero = true;
// Tipos de datos
echo gettype($numero); // Muestra: integer
echo gettype($nombre); // Muestra: string
echo gettype($verdadero); // Muestra: boolean

// Operadores aritméticos
$a = 10;
$b = 5;
echo $a + $b; // Muestra: 15
// Operadores de comparación
if ($a > $b) {
    echo "a es mayor que b";
}


Funciones

// Declaración de una función
function saludar($nombre) {
    echo "Hola, $nombre";
}
// Uso de la función
saludar("Ana"); // Muestra: Hola, Ana


// Función con devolución de valor
function sumar($num1, $num2) {
fwrite($archivo, $txt);
fclose($archivo);

Manipulación de archivos y directorios:
// Manejo de directorios en PHP
// Crear un nuevo directorio
mkdir("nuevodirectorio");

// Eliminar un archivo
unlink("archivo_a_eliminar.txt");

// Eliminar un directorio
rmdir("directorio_a_eliminar");


13. Debugging en PHP:
Uso de var_dump() para depuración:

// Uso de var_dump() para imprimir información sobre una variable
$nombre = "Juan";
$numero = 25;
$array = array("Manzana", "Banana", "Naranja");

var_dump($nombre);
var_dump($numero);
var_dump($array);

Uso de print_r() para visualizar estructuras de datos:

// Uso de print_r() para mostrar información sobre estructuras de datos
$array = array("nombre" => "Ana", "edad" => 30, "ciudad" => "Rosario");

echo "<pre>";
print_r($array);
echo "</pre>";

Uso de die() o exit() para detener la ejecución y depurar:

// Uso de die() o exit() para detener la ejecución y revisar el estado del código
$variable = 100;

if ($variable > 50) {
    // Detener la ejecución y mostrar el valor de la variable
    die("La variable es mayor que 50");
} else {
    // Continuar con la ejecución
    echo "La variable es menor o igual a 50";
}

    public function __construct(PaymentMethod $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function process($amount) {
        $this->paymentMethod->pay($amount);
    }
}


1. include:
include se utiliza para incluir y ejecutar un archivo en un script PHP. Si el archivo no se encuentra, PHP mostrará una advertencia, pero el script continuará ejecutándose.

Ejemplo de uso de include:

Supongamos que tenemos un archivo llamado header.php que contiene el encabezado de una página web:

<!-- Contenido de header.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Mi Página Web</title>
</head>
<body>
    <header>
        <h1>Encabezado de la Página</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

Luego, en el archivo principal index.php, podemos incluir este encabezado usando include:

<!-- Contenido de index.php -->
<?php
include 'header.php'; // Incluye el archivo header.php

// Resto del contenido de la página
echo "<main>";
echo "<p>Bienvenido a mi página web.</p>";
echo "</main>";

// Cierre del archivo incluido
include 'footer.php'; // Incluye el archivo footer.php
?>

2. require:
require es similar a include, pero si el archivo no se encuentra, PHP mostrará un error fatal y detendrá la ejecución del script.

Ejemplo de uso de require:

Supongamos que tenemos un archivo llamado footer.php que contiene el pie de página de la página web:

<!-- Contenido de footer.php -->
    <footer>
        <p>Derechos reservados © 2023</p>
    </footer>
</body>
</html>

Podemos incluir este pie de página usando require en el archivo index.php:

<!-- Contenido de index.php -->
<?php
include 'header.php'; // Incluye el archivo header.php

// Resto del contenido de la página
echo "<main>";
echo "<p>Bienvenido a mi página web.</p>";
echo "</main>";

// Cierre del archivo incluido
require 'footer.php'; // Incluye el archivo footer.php
?>

Ambas funciones (include y require) son útiles para modularizar y reutilizar el código, permitiendo separar la lógica de la presentación y facilitando el mantenimiento del proyecto.

PHP good practices
1 - Use PSR- 12 recommendations
2 - Code Concise and Readable With the Twig Template
3 - Composer as a Dependency Manager
4 - Use 'Namespaces'
5 - Use the Autoloader Function
6 - Use Arrow Functions
Functional Programming Principles
First-class functions
Pure functions
Immutability
Higher-order functions
Declarative approaches:
1 - filter
2 - map
3 - reduce



Índice:

Introducción a PHP 8

Breve historia y contexto del lenguaje.

Sintaxis y Estructuras Básicas
    Variables y tipos de datos.
    Operadores.
    Estructuras de control (if, else, switch, etc.).
    Bucles (for, while, foreach).

Funciones
    Declaración y uso de funciones.
    Argumentos y devoluciones de funciones.
    Funciones anónimas y flecha.

Novedades en PHP 8
    JIT Compiler.
    Union Types.
    Named Arguments.
    Otros cambios significativos.

Gestión de Errores y Excepciones
    Manejo de errores.
    Uso de excepciones.
    Trabajo con Formularios y Datos Externos

Procesamiento de formularios.
    Seguridad en la entrada de datos.
    Acceso a Bases de Datos
    Conexión y consulta a bases de datos MySQL u otros sistemas.

Interacción con Archivos
    Lectura y escritura de archivos.
    Manipulación de archivos y directorios.
    Integración con HTML y Estilos

Uso de Arrays en PHP
    Definición y uso de arrays.
    Funciones para trabajar con arrays.

Arrays Especiales en PHP
    Arrays asociativos.
    Arrays multidimensionales.
    Arrays superglobales.

Trabajo con Sesiones y Cookies
    Uso de sesiones para mantener datos entre solicitudes.
    Almacenamiento y gestión de cookies en PHP.

Métodos HTTP (GET, POST, PUT, DELETE)
    Uso y diferencias entre GET, POST, PUT y DELETE.
    Implementación en PHP para procesar solicitudes HTTP.

Uso de PHP en páginas web.
    Introducción al PHP en la capa de presentación.
    Conclusiones y Recursos Adicionales

Resumen final.
    Recursos recomendados para aprender más sobre PHP 8.
