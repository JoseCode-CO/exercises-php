<?php

/*Implemente una función que calcule la distancia promedio entre tres puntos dados de un plano 
siendo las coordenadas de estos puntos (x1,y1), (x2,y2), (x3,y3).*/
function distance($x1, $y1, $x2, $y2){
    //Sacamos la raiz cuadrada con (sqrt) Y la base y potencia con pow
    
    //Aplicando la formula establecida
    $calc =sqrt(pow($x2-$x1, 2)+pow($y2-$y1, 2));

    return $calc;
}

//Valores del primer punto
$x1 = 1;
$y1 = 1;

//Valores del segundo punto
$x2=2;
$y2=2;

//Valores del tercer punto
$x3=3;
$y3=3;

//Resultado del primer punto
$resulp1 = distance($x1, $y1, $x2, $y2);

//Resultado del segundo punto
$resulp2 = distance($x1, $y1, $x3, $y3);
$resultp3= distance($x2, $y2, $x3, $y3);

$prom = ($resulp1+$resulp2+$resultp3)/3;

echo "El promedio entre los 3 puntos es: " .$prom;