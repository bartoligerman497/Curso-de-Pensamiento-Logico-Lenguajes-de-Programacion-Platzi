<html>
   <head>
    <title>PHP Test</title>
  </head>
   <body>
     <?php echo '<p>Hello World</p>'; ?>
  </body
</html>

<!-- ejemplo profe  -->
<?php
function suma (){
    $valor1 = 8;
    $valor2 = 6;
    $resultado = $valor1 + $valor2;
    print_r($resultado);
}
suma ();

?>

Francisco Matta Perdomo Ejemplo

<?php
function sum($a,$b){
  return $a+$b;
}
function substract($a,$b){
  return $a-$b;
}
function multiply($a,$b){
  return $a*$b;
}
function divide($a,$b){
  return $a/$b;
}
echo '<p>';
print_r(sum(5,6));
echo '</p>';
echo '<p>';
print_r(substract(5,6));
echo '</p>';
echo '<p>';
print_r(multiply(5,6));
echo '</p>';
echo '<p>';
print_r(divide(5,6));
echo '</p>';

?>


Reto 11

En la siguiente clase encontrarás un ejemplo práctico en PHP en el cual pediremos recomendaciones de lugares de Colombia de acuerdo con su clima, ubicación o atractivo turístico.

Para entender este reto en términos prácticos, realizaremos las siguientes acciones:

Definimos un arreglo asociativo que tendrá una estructura “llave” => “valor” donde almacenaremos las condiciones climáticas de cada región definida.
Por ejemplo:

$weather = array(“Bogotá” => “Cold”, “Montería” => “hot”, “Medellín” => “mild”);
Realizaremos el paso anterior en dos ocasiones más para definir un array de ubicación y turismo.

Con una estructura switch recibiremos la condición y de acuerdo a este valor buscaremos en un array para obtener la respuesta que buscamos.

Si preguntamos por el clima y que sea frío, buscaremos el valor cold dentro del array $weather.

Si preguntamos por la ubicación y que sea al norte, buscaremos el valor north dentro del array $ubication.

Si preguntamos por el turismo y que sea mar, buscaremos el valor sea dentro del array $tourism.

Así se vería este ejercicio gráficamente:

climas = array(
   "Bogotá" => "frío",
   "Montería" => "calido",
   "Medellín" => "templado",
 )

 Buscar por:
 Clima frio

ubicación = array(
   "Guajira"=> "norte",
   "Leticia"=> "sur",
   "Santander" => "este",
   "Antioquia" => "oeste",
 )

 En climas
 buscar el valor
 frio

turismo = array(
   "Santa Marta"=> "mar",
   "Villavicencio" => "llano",
   "Riohacha"=> "desierto",
   "Quindío"=> "Valle",

Resultado:
Bogotá

Reto arreglos PHP
¡No te rindas! ¡Este es el algoritmo más avanzado que desarrollaremos en este curso! En las próximas 2 clases nuestra profesora Ana Belisa te mostrará su solución. Pero tú puedes hacerlo mejor. Tienes todas las herramientas necesarias para resolverlo. ¡Inténtalo con todas tus fuerzas! 😉

edwin ramirez

<?php

// Se crean los diferentes array.
$weather = array("Bogota" => "Frio", "Monteria" => "Calido", "Medellin" => "Templado" );
$ubication = array ("Guajira"=> "Norte", "Leticia"=>"Sur", "Santander"=>"Este", "Antioquia"=>"Oeste");
$tourism = array("Santa Marta"=>"Mar", "Villavicencio"=>"Llano", "Rioacha"=>"Desierto", "Quindio"=>"Valle" );

// A traves de la función readline se escribes en consola las opciones de interes correspondientes a los 3 array construidos con anterioridad, el valor ingresado por el usuario en consola se guarda en la variable $search.
$search = readline("Seleccione la opción de su interes:   1.Clima 2.Ubicación 3.Turismo  ");

// Se genera la estructura switch evaluando la variable $search y dependiendo de la opcion elegida se generan otras estructuras switch anidadas y se remiten a los valores "llave o clave " dentro del array correspondiente y de acuerdo al "valor" como parametro de busqueda.
switch($search){
  case 1:
  $clima = readline("Seleccione el clima favorito:   
  1.Frío 2.Cálido 3.Templado");
  switch($clima){
    case 1:
    $clave = array_search('Frio', $weather); 
    echo "La ciudad recomendada es ", $clave;
    break;
    case 2:
    $clave = array_search('Calido', $weather);
    echo "La ciudad recomendada es ", $clave;
    break;
    case 3:
    $clave = array_search('Templado', $weather);
    echo "La ciudad recomendada es ", $clave;
    break;           
  }
  break;

  case 2:
  $ubicacion = readline("Seleccione la ubicación 
  favorita: 1.Norte 2.Sur 3.Este 4.Oeste ");
  switch($ubicacion){
    case 1:
    $clave = array_search('Norte', $ubication); 
    echo "La ciudad recomendada es ", $clave;
    break;
    case 2:
    $clave = array_search('Sur', $ubication);
    echo "La ciudad recomendada es ", $clave;
    break;
    case 3:
    $clave = array_search('Este', $ubication);
    echo "La ciudad recomendada es ", $clave;
    break; 
    case 4:
    $clave = array_search('Oeste', $ubication);
    echo "La ciudad recomendada es ", $clave;
    break; 
  }
  break;
  
  case 3:
  $turismo = readline("Seleccione el turismo 
  favorito: 1.Mar 2.Llano 3.Desierto 4.Valle ");
  switch($turismo){
    case 1:
    $clave = array_search('Mar', $tourism); 
    echo "La ciudad recomendada es ", $clave;
    break;
    case 2:
    $clave = array_search('Llano', $tourism);
    echo "La ciudad recomendada es ", $clave;
    break;
    case 3:
    $clave = array_search('Desierto', $tourism);
    echo "La ciudad recomendada es ", $clave;
    break; 
    case 4:
    $clave = array_search('Valle', $tourism);
    echo "La ciudad recomendada es ", $clave;
    break; 
  }
  break;
}

?> 

solución profe

<?php
/*Tener una lista de ciudades con un 
clima y una ubicación específica*/

function recomendacion(){
    
    $clima = array ("Bogota" => "Frio", 
    "Monteria" => "Calido", "Medellin" => "Templado" );

    $ubicacion = array ("Guajira" => "Norte", 
    "Leticia" => "Sur", "Santander" => "Este", "Antioquia" => "Oeste");

    $turismo = array ("Santa Marta" => "Mar", 
    "Villavicencio" => "Llanos", "Riocha" => "Desierto", "Quindio" => "Valle");

    switch("turismo"){

        case "clima":
            echo array_search("Frio", $clima);
            break;
        case "ubicacion":
            echo array_search("Norte", $ubicacion);
            break; 
        case "turismo":
            echo array_search("Mar", $turismo);
            break; 
      } 
}

recomendacion();

?>
