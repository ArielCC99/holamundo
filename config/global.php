<?php

//Comentarios esto no se ejecuta 
// Variable=es un espacio de memoria donde se almacena un valor 
//$nombre_variable="valor";
//Tipos de variables en php
//1. enteros $edad=20;
//2. flotantes $altura=1.75;
//3. cadenas de texto $nombre="Juan";
//4. booleanos $es_estudiante=true/false;
//5. arreglos $colores=array("rojo", "verde", "azul");
echo "Hola, mundo desde el sevidor y archivo global.php";
?>
<!--Aqui doy un salto de linea-->
<br>
<?php
print("Hola, mundo desde el servidor y archivo global.php con print");

?>
<h1>Manejo de parametros </h1>
<br>
<?php
$numero1 = 10;
$numero2 = 20;
$suma = $numero1 + $numero2;
$es_estuadiane=true;
echo "La suma de $numero1 y $numero2 es igual a $suma<br>";  
echo "El valor de la variable estudiante es: $es_estuadiane<br>"; 
if ($es_estuadiane) {
    echo "El estudiante es verdadero";
} else {
    echo "El estudiante es falso";
}
?>