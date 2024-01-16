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



Introducción a PHP 8

Breve historia y contexto del lenguaje.

PHP, siglas de "Hypertext Preprocessor", es un lenguaje de programación de código abierto ampliamente utilizado para el desarrollo web. Fue creado originalmente por Rasmus Lerdorf en 1994 como un conjunto de scripts personales llamado "Personal Home Page Tools" (Herramientas para Páginas Personales). Inicialmente, PHP era un conjunto de scripts simples que se utilizaban para mantener su página web personal. Con el tiempo, se convirtió en un proyecto de código abierto más amplio.

En 1997, se lanzó la primera versión oficial de PHP, la versión 2.0. A partir de ese momento, el desarrollo de PHP fue acelerado por una comunidad de desarrolladores que contribuyeron con nuevas características y mejoras significativas. La versión 3, lanzada en 1998, introdujo un nuevo motor de análisis y soporte para bases de datos, allanando el camino para que PHP se convirtiera en un lenguaje de programación más robusto y versátil.

Con la llegada de la versión 4 en 2000, PHP dio un salto significativo en su popularidad. Esta versión presentó una arquitectura completamente nueva y mejoras sustanciales en la velocidad y la estabilidad. PHP se consolidó como uno de los lenguajes de programación más utilizados para el desarrollo web, especialmente en la construcción de aplicaciones dinámicas y sitios web interactivos.

El lanzamiento de PHP 5 en 2004 marcó otro hito importante al introducir nuevas características clave, como mejoras en la orientación a objetos, soporte para XML y una arquitectura interna más sólida.

Finalmente, PHP 7, lanzado en 2015, trajo consigo mejoras significativas en el rendimiento, con un motor interno más rápido y eficiente. Esta versión impulsó aún más la adopción de PHP, ofreciendo a los desarrolladores un lenguaje más rápido y moderno para sus proyectos web.

A lo largo de los años, PHP ha evolucionado constantemente, adaptándose a las necesidades cambiantes de la web y manteniendo su relevancia como un lenguaje versátil, utilizado por millones de desarrolladores en todo el mundo para crear aplicaciones web dinámicas y poderosas.


1. Introducción a PHP 8:
PHP es un lenguaje de programación popular y versátil utilizado principalmente para el desarrollo web. Con su última versión, PHP 8, se han introducido mejoras y nuevas funcionalidades que hacen que el lenguaje sea más potente y eficiente.

2. Sintaxis y Estructuras Básicas:
Variables y tipos de datos:
En PHP, las variables se definen con el símbolo $. Los tipos de datos incluyen enteros, cadenas, booleanos, arrays, entre otros.

Operadores:
PHP admite varios operadores aritméticos, lógicos, de comparación y de asignación para realizar diferentes operaciones.

Estructuras de control:
Las estructuras de control como if, else, switch, permiten tomar decisiones en el código según condiciones dadas.

Bucles:
Los bucles como for, while, foreach permiten ejecutar bloques de código repetidamente según ciertas condiciones.

3. Funciones:
Declaración y uso de funciones:
En PHP, se pueden definir funciones con la palabra clave function, permitiendo modularizar el código y reutilizar bloques lógicos.

Argumentos y devoluciones de funciones:
Las funciones pueden aceptar argumentos y devolver valores, lo que ofrece flexibilidad en la programación.

Funciones anónimas y flecha:
PHP 8 introduce funciones anónimas y la sintaxis de flecha (fn) para escribir funciones más concisas y expresivas.

4. Novedades en PHP 8:
JIT Compiler:
El compilador JIT (Just-In-Time) en PHP 8 mejora el rendimiento al compilar el código durante la ejecución.

Union Types:
Permite definir múltiples tipos para parámetros y devoluciones de funciones, mejorando la claridad y robustez del código.

Named Arguments:
Facilita la legibilidad del código al pasar argumentos a funciones por su nombre, en lugar de su posición.

Otros cambios significativos:
PHP 8 introduce otras mejoras como Attributes, Match Expression, Nullsafe Operator, entre otros.

5. Gestión de Errores y Excepciones:
Manejo de errores:
PHP proporciona funciones para controlar y gestionar errores, como try, catch, throw, finally, que permiten manejar situaciones inesperadas.

Uso de excepciones:
Las excepciones en PHP son objetos que representan errores o situaciones excepcionales. Con try y catch, se pueden capturar y manejar estas excepciones para controlar el flujo del programa.

6. Trabajo con Formularios y Datos Externos:
Procesamiento de formularios:
PHP es ampliamente utilizado para procesar datos de formularios HTML, obteniendo información enviada por el usuario.

Seguridad en la entrada de datos:
Es esencial validar y filtrar los datos de entrada para prevenir ataques como inyecciones SQL o cross-site scripting (XSS).

7. Acceso a Bases de Datos:
Conexión y consulta a bases de datos:
PHP ofrece funciones y extensiones para conectarse a diferentes sistemas de bases de datos, como MySQL, PostgreSQL, SQLite, etc., y realizar consultas SQL para interactuar con los datos.

8. Interacción con Archivos:
Lectura y escritura de archivos:
PHP proporciona funciones para abrir, leer, escribir y cerrar archivos, permitiendo el manejo de información almacenada en ellos.

Manipulación de archivos y directorios:
Se pueden realizar operaciones como la creación, eliminación, copia y movimiento de archivos y directorios mediante las funciones proporcionadas por PHP.

9. Integración con HTML y Estilos:
Uso de PHP en páginas web:
PHP se integra con HTML para generar contenido dinámico en las páginas web, permitiendo incrustar código PHP dentro del código HTML.

Introducción al PHP en la capa de presentación:
Se pueden utilizar plantillas y sistemas de diseño para separar la lógica de presentación del código PHP, mejorando la mantenibilidad y legibilidad del código.

10. Conclusiones y Recursos Adicionales:
Resumen final:
Repaso de las funcionalidades fundamentales de PHP 8 cubiertas en el apunte.

Recursos recomendados para aprender más sobre PHP 8:
Listado de libros, documentación oficial, tutoriales en línea u otras fuentes para seguir profundizando en PHP 8 y sus características avanzadas

9. Uso de Arrays en PHP:
Definición y uso de arrays:
PHP permite trabajar con arrays, que pueden almacenar múltiples valores bajo un solo nombre y pueden ser indexados numéricamente o asociativamente.

Funciones para trabajar con arrays:
PHP proporciona numerosas funciones integradas para manipular y acceder a elementos en arrays, como count(), array_push(), array_pop(), entre otras.


Definición y uso de arrays:

// Crear un array numérico
$numericalArray = array(10, 20, 30, 40);

// Acceder a elementos del array
echo $numericalArray[0]; // Muestra: 10

// Crear un array asociativo
$associativeArray = array("nombre" => "Juan", "edad" => 25, "ciudad" => "Buenos Aires");

// Acceder a elementos del array asociativo
echo $associativeArray["nombre"]; // Muestra: Juan

Funciones para trabajar con arrays:
// Contar elementos en un array
$count = count($numericalArray); // $count es 4

// Añadir elementos al final de un array
array_push($numericalArray, 50);

// Eliminar el último elemento de un array
$lastElement = array_pop($numericalArray); // $lastElement es 50



10. Arrays Especiales en PHP:
Arrays asociativos:
Los arrays asociativos utilizan claves personalizadas en lugar de índices numéricos, lo que permite asociar valores con nombres específicos.

// Crear un array asociativo
$person = array("nombre" => "María", "edad" => 30, "ciudad" => "Córdoba");

// Acceder a elementos del array asociativo
echo $person["edad"]; // Muestra: 30


Arrays multidimensionales:
PHP permite la creación de arrays dentro de otros arrays, lo que resulta en estructuras de datos multidimensionales para almacenar información de manera jerárquica.

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
    return $num1 + $num2;
}
// Llamar a la función y mostrar el resultado
$resultado = sumar(3, 4); // $resultado es 7
echo $resultado;


Novedades en PHP 8

// Uso del JIT Compiler en PHP 8
echo "El JIT Compiler mejora el rendimiento del código PHP en tiempo de ejecución.";

// Uso de Union Types en PHP 8
function suma(int|float $a, int|float $b): int|float {
    return $a + $b;
}

// Uso de Named Arguments en PHP 8
function saludar($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre";
}
// Llamada a la función con Named Arguments
saludar(saludo: "Hey", nombre: "Juan"); // Muestra: Hey, Juan

Gestión de Errores y Excepciones

// Manejo de errores en PHP
try {
    // Código propenso a errores
    $resultado = 10 / 0; // Genera un error de división por cero
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Uso de excepciones en PHP
function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("División por cero");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

6. Trabajo con Formularios y Datos Externos:

Procesamiento de formularios:

// Procesamiento de datos de un formulario en PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    // Realizar acciones con los datos recibidos
}

Seguridad en la entrada de datos:

// Ejemplo de filtrado de datos para prevenir SQL injection
$nombre = $_POST['nombre'];
$nombreFiltrado = mysqli_real_escape_string($conexion, $nombre);
// Usar $nombreFiltrado en consultas SQL

7. Acceso a Bases de Datos:

Conexión y consulta a bases de datos:

// Conexión a una base de datos MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nombre_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Consulta a la base de datos
$resultado = $conn->query("SELECT * FROM tabla");

8. Interacción con Archivos:
Lectura y escritura de archivos:

// Lectura de un archivo en PHP
$archivo = fopen("archivo.txt", "r") or die("No se puede abrir el archivo.");
echo fread($archivo, filesize("archivo.txt"));
fclose($archivo);

// Escritura en un archivo en PHP
$archivo = fopen("nuevoarchivo.txt", "w") or die("No se puede abrir el archivo.");
$txt = "Texto a escribir en el archivo";
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

Configuración de errores en PHP:

// Configuración de errores en PHP
// Mostrar todos los errores
error_reporting(E_ALL);

// Mostrar errores en pantalla
ini_set('display_errors', 1);


Patrones de diseño

Utilizar patrones de diseño en PHP es fundamental para crear aplicaciones más estructuradas, mantenibles y escalables.

1. Patrón Singleton:
Este patrón se utiliza para garantizar que una clase tenga una única instancia y proporcionar un punto de acceso global a esta instancia.

class Singleton {
    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

2. Patrón Factory:

El patrón Factory se utiliza para crear objetos sin especificar la clase exacta del objeto que se creará.

interface Vehicle {
    public function drive();
}

class Car implements Vehicle {
    public function drive() {
        echo "Driving a car.";
    }
}

class Bike implements Vehicle {
    public function drive() {
        echo "Riding a bike.";
    }
}

class VehicleFactory {
    public static function createVehicle($type) {
        if ($type === 'car') {
            return new Car();
        } elseif ($type === 'bike') {
            return new Bike();
        }
        return null;
    }
}

3. Patrón Strategy:

Este patrón permite definir una familia de algoritmos, encapsular cada uno de ellos y hacerlos intercambiables.

interface PaymentMethod {
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Paying $amount with credit card.";
    }
}

class PayPalPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Paying $amount with PayPal.";
    }
}

class Order {
    private $paymentMethod;

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



Introducción a PHP 8

Breve historia y contexto del lenguaje.

PHP, siglas de "Hypertext Preprocessor", es un lenguaje de programación de código abierto ampliamente utilizado para el desarrollo web. Fue creado originalmente por Rasmus Lerdorf en 1994 como un conjunto de scripts personales llamado "Personal Home Page Tools" (Herramientas para Páginas Personales). Inicialmente, PHP era un conjunto de scripts simples que se utilizaban para mantener su página web personal. Con el tiempo, se convirtió en un proyecto de código abierto más amplio.

En 1997, se lanzó la primera versión oficial de PHP, la versión 2.0. A partir de ese momento, el desarrollo de PHP fue acelerado por una comunidad de desarrolladores que contribuyeron con nuevas características y mejoras significativas. La versión 3, lanzada en 1998, introdujo un nuevo motor de análisis y soporte para bases de datos, allanando el camino para que PHP se convirtiera en un lenguaje de programación más robusto y versátil.

Con la llegada de la versión 4 en 2000, PHP dio un salto significativo en su popularidad. Esta versión presentó una arquitectura completamente nueva y mejoras sustanciales en la velocidad y la estabilidad. PHP se consolidó como uno de los lenguajes de programación más utilizados para el desarrollo web, especialmente en la construcción de aplicaciones dinámicas y sitios web interactivos.

El lanzamiento de PHP 5 en 2004 marcó otro hito importante al introducir nuevas características clave, como mejoras en la orientación a objetos, soporte para XML y una arquitectura interna más sólida.

Finalmente, PHP 7, lanzado en 2015, trajo consigo mejoras significativas en el rendimiento, con un motor interno más rápido y eficiente. Esta versión impulsó aún más la adopción de PHP, ofreciendo a los desarrolladores un lenguaje más rápido y moderno para sus proyectos web.

A lo largo de los años, PHP ha evolucionado constantemente, adaptándose a las necesidades cambiantes de la web y manteniendo su relevancia como un lenguaje versátil, utilizado por millones de desarrolladores en todo el mundo para crear aplicaciones web dinámicas y poderosas.


1. Introducción a PHP 8:
PHP es un lenguaje de programación popular y versátil utilizado principalmente para el desarrollo web. Con su última versión, PHP 8, se han introducido mejoras y nuevas funcionalidades que hacen que el lenguaje sea más potente y eficiente.

2. Sintaxis y Estructuras Básicas:
Variables y tipos de datos:
En PHP, las variables se definen con el símbolo $. Los tipos de datos incluyen enteros, cadenas, booleanos, arrays, entre otros.

Operadores:
PHP admite varios operadores aritméticos, lógicos, de comparación y de asignación para realizar diferentes operaciones.

Estructuras de control:
Las estructuras de control como if, else, switch, permiten tomar decisiones en el código según condiciones dadas.

Bucles:
Los bucles como for, while, foreach permiten ejecutar bloques de código repetidamente según ciertas condiciones.

3. Funciones:
Declaración y uso de funciones:
En PHP, se pueden definir funciones con la palabra clave function, permitiendo modularizar el código y reutilizar bloques lógicos.

Argumentos y devoluciones de funciones:
Las funciones pueden aceptar argumentos y devolver valores, lo que ofrece flexibilidad en la programación.

Funciones anónimas y flecha:
PHP 8 introduce funciones anónimas y la sintaxis de flecha (fn) para escribir funciones más concisas y expresivas.

4. Novedades en PHP 8:
JIT Compiler:
El compilador JIT (Just-In-Time) en PHP 8 mejora el rendimiento al compilar el código durante la ejecución.

Union Types:
Permite definir múltiples tipos para parámetros y devoluciones de funciones, mejorando la claridad y robustez del código.

Named Arguments:
Facilita la legibilidad del código al pasar argumentos a funciones por su nombre, en lugar de su posición.

Otros cambios significativos:
PHP 8 introduce otras mejoras como Attributes, Match Expression, Nullsafe Operator, entre otros.

5. Gestión de Errores y Excepciones:
Manejo de errores:
PHP proporciona funciones para controlar y gestionar errores, como try, catch, throw, finally, que permiten manejar situaciones inesperadas.

Uso de excepciones:
Las excepciones en PHP son objetos que representan errores o situaciones excepcionales. Con try y catch, se pueden capturar y manejar estas excepciones para controlar el flujo del programa.

6. Trabajo con Formularios y Datos Externos:
Procesamiento de formularios:
PHP es ampliamente utilizado para procesar datos de formularios HTML, obteniendo información enviada por el usuario.

Seguridad en la entrada de datos:
Es esencial validar y filtrar los datos de entrada para prevenir ataques como inyecciones SQL o cross-site scripting (XSS).

7. Acceso a Bases de Datos:
Conexión y consulta a bases de datos:
PHP ofrece funciones y extensiones para conectarse a diferentes sistemas de bases de datos, como MySQL, PostgreSQL, SQLite, etc., y realizar consultas SQL para interactuar con los datos.

8. Interacción con Archivos:
Lectura y escritura de archivos:
PHP proporciona funciones para abrir, leer, escribir y cerrar archivos, permitiendo el manejo de información almacenada en ellos.

Manipulación de archivos y directorios:
Se pueden realizar operaciones como la creación, eliminación, copia y movimiento de archivos y directorios mediante las funciones proporcionadas por PHP.

9. Integración con HTML y Estilos:
Uso de PHP en páginas web:
PHP se integra con HTML para generar contenido dinámico en las páginas web, permitiendo incrustar código PHP dentro del código HTML.

Introducción al PHP en la capa de presentación:
Se pueden utilizar plantillas y sistemas de diseño para separar la lógica de presentación del código PHP, mejorando la mantenibilidad y legibilidad del código.

10. Conclusiones y Recursos Adicionales:
Resumen final:
Repaso de las funcionalidades fundamentales de PHP 8 cubiertas en el apunte.

Recursos recomendados para aprender más sobre PHP 8:
Listado de libros, documentación oficial, tutoriales en línea u otras fuentes para seguir profundizando en PHP 8 y sus características avanzadas

9. Uso de Arrays en PHP:
Definición y uso de arrays:
PHP permite trabajar con arrays, que pueden almacenar múltiples valores bajo un solo nombre y pueden ser indexados numéricamente o asociativamente.

Funciones para trabajar con arrays:
PHP proporciona numerosas funciones integradas para manipular y acceder a elementos en arrays, como count(), array_push(), array_pop(), entre otras.


Definición y uso de arrays:

// Crear un array numérico
$numericalArray = array(10, 20, 30, 40);

// Acceder a elementos del array
echo $numericalArray[0]; // Muestra: 10

// Crear un array asociativo
$associativeArray = array("nombre" => "Juan", "edad" => 25, "ciudad" => "Buenos Aires");

// Acceder a elementos del array asociativo
echo $associativeArray["nombre"]; // Muestra: Juan

Funciones para trabajar con arrays:
// Contar elementos en un array
$count = count($numericalArray); // $count es 4

// Añadir elementos al final de un array
array_push($numericalArray, 50);

// Eliminar el último elemento de un array
$lastElement = array_pop($numericalArray); // $lastElement es 50



10. Arrays Especiales en PHP:
Arrays asociativos:
Los arrays asociativos utilizan claves personalizadas en lugar de índices numéricos, lo que permite asociar valores con nombres específicos.

// Crear un array asociativo
$person = array("nombre" => "María", "edad" => 30, "ciudad" => "Córdoba");

// Acceder a elementos del array asociativo
echo $person["edad"]; // Muestra: 30


Arrays multidimensionales:
PHP permite la creación de arrays dentro de otros arrays, lo que resulta en estructuras de datos multidimensionales para almacenar información de manera jerárquica.

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
    return $num1 + $num2;
}
// Llamar a la función y mostrar el resultado
$resultado = sumar(3, 4); // $resultado es 7
echo $resultado;


Novedades en PHP 8

// Uso del JIT Compiler en PHP 8
echo "El JIT Compiler mejora el rendimiento del código PHP en tiempo de ejecución.";

// Uso de Union Types en PHP 8
function suma(int|float $a, int|float $b): int|float {
    return $a + $b;
}

// Uso de Named Arguments en PHP 8
function saludar($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre";
}
// Llamada a la función con Named Arguments
saludar(saludo: "Hey", nombre: "Juan"); // Muestra: Hey, Juan

Gestión de Errores y Excepciones

// Manejo de errores en PHP
try {
    // Código propenso a errores
    $resultado = 10 / 0; // Genera un error de división por cero
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Uso de excepciones en PHP
function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("División por cero");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

6. Trabajo con Formularios y Datos Externos:

Procesamiento de formularios:

// Procesamiento de datos de un formulario en PHP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    // Realizar acciones con los datos recibidos
}

Seguridad en la entrada de datos:

// Ejemplo de filtrado de datos para prevenir SQL injection
$nombre = $_POST['nombre'];
$nombreFiltrado = mysqli_real_escape_string($conexion, $nombre);
// Usar $nombreFiltrado en consultas SQL

7. Acceso a Bases de Datos:

Conexión y consulta a bases de datos:

// Conexión a una base de datos MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "nombre_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Consulta a la base de datos
$resultado = $conn->query("SELECT * FROM tabla");

8. Interacción con Archivos:
Lectura y escritura de archivos:

// Lectura de un archivo en PHP
$archivo = fopen("archivo.txt", "r") or die("No se puede abrir el archivo.");
echo fread($archivo, filesize("archivo.txt"));
fclose($archivo);

// Escritura en un archivo en PHP
$archivo = fopen("nuevoarchivo.txt", "w") or die("No se puede abrir el archivo.");
$txt = "Texto a escribir en el archivo";
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

Configuración de errores en PHP:

// Configuración de errores en PHP
// Mostrar todos los errores
error_reporting(E_ALL);

// Mostrar errores en pantalla
ini_set('display_errors', 1);


Patrones de diseño

Utilizar patrones de diseño en PHP es fundamental para crear aplicaciones más estructuradas, mantenibles y escalables.

1. Patrón Singleton:
Este patrón se utiliza para garantizar que una clase tenga una única instancia y proporcionar un punto de acceso global a esta instancia.

class Singleton {
    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

2. Patrón Factory:

El patrón Factory se utiliza para crear objetos sin especificar la clase exacta del objeto que se creará.

interface Vehicle {
    public function drive();
}

class Car implements Vehicle {
    public function drive() {
        echo "Driving a car.";
    }
}

class Bike implements Vehicle {
    public function drive() {
        echo "Riding a bike.";
    }
}

class VehicleFactory {
    public static function createVehicle($type) {
        if ($type === 'car') {
            return new Car();
        } elseif ($type === 'bike') {
            return new Bike();
        }
        return null;
    }
}

3. Patrón Strategy:

Este patrón permite definir una familia de algoritmos, encapsular cada uno de ellos y hacerlos intercambiables.

interface PaymentMethod {
    public function pay($amount);
}

class CreditCardPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Paying $amount with credit card.";
    }
}

class PayPalPayment implements PaymentMethod {
    public function pay($amount) {
        echo "Paying $amount with PayPal.";
    }
}

class Order {
    private $paymentMethod;

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

Ambas funciones (include y require) son útiles para modularizar y reutilizar el código, permitiendo separar la lógica de la presentación y facilitando el mantenimiento del proyecto.#   c o d i n g r o c k - a r . g i t h u b . i o  
 