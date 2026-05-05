<?php



## Comentarios
# .
// .
/* . */



## Variables
$nombre = "Juan";
$edad = "20";
echo $nombre; // Imprime: Juan



## Constantes
define("PI", 3.1416);
const SALUDO = "Hola";
echo PI; // Imprime: 3.1416



## Arrays indexados
$frutas = ("Manzana", "Banano", "Uva");
echo $frutas[0]; // Imprime: Manzana
echo $frutas[2]; // Imprime: Uva



## Arrays Asociativos
$persona = ["nombre" => "Ana", "edad" => 25, "ciudad" => "Bogotá"];
echo $persona["nombre"]; // Imprime: Ana



## Operadores Comparativos
$a = 5;
$b = "5";

var_dump($a == $b);  // true
var_dump($a === $b); // false (int vs string)



## Operadores Lógicos
$usuario = "admin";
$clave = "1234";

if ($usuario == "admin" && $clave == "1234") {
    echo "Acceso correcto";
}



## Operadores Asignación
$a = 10;
$b = 3;

echo $a + $b; // 13
echo $a % $b; // 1 (residuo de la división)



### Operadores de Asignación
$x = 20;
$x -= 5; // $x = $x - 5 → 15
$x *= 2; // 30



## Operadores de Incremento/Decremento
$x = 5;
echo $x++; // muestra 5, luego vale 6
echo ++$x; // primero suma (7), luego muestra 7

?>

