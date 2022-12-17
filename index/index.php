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
    //Se crea la variable booleana
    $palindromo = false;

    //Se emplea un condicional utilizando el metodo strrev que nos sirve para invertir un string
    if (strrev($palabra) === $palabra) {

        //Si la condicion se cumple se cambia a true la variable palindromo de lo contrario se imprime en el valor inicial
        $palindromo = true;
        var_dump((bool) $palindromo); 
    } else {
        var_dump((bool) $palindromo); 
    }
}

IsCasiPalindromo("Nombre");
