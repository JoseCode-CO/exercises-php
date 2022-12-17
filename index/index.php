<?php

//Ejercicio 1

/*Implemente una función que calcule la distancia promedio entre tres puntos dados de un plano 
siendo las coordenadas de estos puntos (x1,y1), (x2,y2), (x3,y3).*/
function distance($x1, $y1, $x2, $y2)
{
    //Sacamos la raiz cuadrada con (sqrt) Y la base y potencia con pow

    //Aplicando la formula establecida
    $calc = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    return $calc;
}

//Valores del primer punto
$x1 = 1;
$y1 = 1;

//Valores del segundo punto
$x2 = 2;
$y2 = 2;

//Valores del tercer punto
$x3 = 3;
$y3 = 3;

//Resultado del primer punto
$resulp1 = distance($x1, $y1, $x2, $y2);

//Resultado del segundo punto
$resulp2 = distance($x1, $y1, $x3, $y3);
$resultp3 = distance($x2, $y2, $x3, $y3);

$prom = ($resulp1 + $resulp2 + $resultp3) / 3;

echo "El promedio entre los 3 puntos es: " . $prom;



//Ejercicio 2

//Un palindromo o capicúa es una palabra que se lee igual hacia adelante que hacia atrás por ejemplo “Ojo” o 
//“anana”.Implemente la funcion booleana IsCasiPalindromo(string palabra). La función retorna true si la palabra 
//es un palindromo o si modificando un solo carácter de la palabra esta podria ser un palindromo, y false en caso contrario 
//(cuando se requiera modificar 2 o más caracteres para que la palabra se convierta en palindromo). A fines de este ejercicio, 
//se asume que todos los caracteres de palabra serán recibidos en minuscula. No se requiere hacer ningun chequeo sobre el case 
//(mayuscula/minuscula).Ejemplos:IsCasiPalindromo(abccba)--> true 
//es palindormo IsCasiPalindromo(abccbx)--> true //modificando la x por una a es palindromoIsCasiPalindromo(abccfg)--> flase 
//No hay forma de obtener un palindromo modificando 
//un solo carácter, es necesario modificar al menos dos. Por ejemplo la f por una b y la g por una a.


function IsCasiPalindromo($palabra)
{
    //Se crea la variable booleana para saber si se cumple la condicion y mostrar el mensaje esperado
    $palindromo = false;

    // Convertimos la palabra a minúsculas para evitar problemas
    // con mayúsculas y minúsculas
    $palabra = strtolower($palabra);

    // Longitud de la palabra
    $longitud = strlen($palabra);

    // Inicializamos el contador de diferencias
    $diferencias = 0;

    // Recorremos la palabra comparando cada par de caracteres
    // en posiciones opuestas
    for ($i = 0; $i < $longitud / 2; $i++) {
        if ($palabra[$i] != $palabra[$longitud - $i - 1]) {
            $diferencias++;
        }
    }

    // Si hay una o cero diferencias, retornamos true
    // (es un palíndromo o casi palíndromo)
    if ($diferencias <= 1) {
        $palindromo = true;
        var_dump((bool) $palindromo); 
    }else{
        
    // En caso contrario, retornamos false
    var_dump((bool) $palindromo); 
    }

}

echo IsCasiPalindromo("Ojo");



//Escriba una funcion que recibe un array de enteros positivos con valores entre 1 y 5,000 y la longitud del array , y retorne el 
//numero que mas veces aparece en el array. 
//En el caso de que dos o mas numeros aparezcan la misma cantidad de veces la funcion retorna el menor numero entre aquellos que mas veces aparecen en el array.
//Ejemplos:NumMasPopular([34,31,34,77,82],5) → 34 //es el unico que aparece 2 vecesNumMasPopular([22,101,102,101,102,525,88],7)
// → 101 // 101 y 102 aparece dos veces cada una pero 101<102NumMasPopular([66],1) → 66 
//Es el unico numeroNumMasPopular([14,14,2342,2342,2342],5) → 2342 //aparece 3 veces mientras que 14 solo aparece dos veces.

function numberRepeated($numbers, $length)
{

    //Validaciones

    //Verificando que el array tenga numeros positivos y enteros

    //Validando que esten entre 1 y 5,000

    //Verificando que el numero de valores corresponda a la longitud ingresada
    if (count($numbers) != $length) {
        echo "La longitud que ingresó, no corresponde al numero de valores vuelta a intentarlo!";
    }
}

numberRepeated([10, 20, 45], 8);
