<?php 

$numero = 10;
$numeroAlCubo = $numero *$numero * $numero;

echo "el $numero al cubo es ",$numeroAlCubo;

//2)
$fechaAtual = 2021;
$fechaNacimiento = 1996;
echo "<br>";

$edad = $fechaAtual - $fechaNacimiento;
echo  "edad actual es de ",$edad;
echo "<br>";
// 3) 
$distancia = 200;
$velocidad = 50; 
$tiempo = $distancia / $velocidad;
echo $tiempo;
 //5
 $sueldofijo = 15000;
  
 $totalfacturado =  (5/100 * $sueldofijo);
echo "<br>";
echo "total facturado ",$totalfacturado;
//6
 $nota1 = 6;
 $nota2 = 7;
 $nota3 = 8;
 echo "<br>";
$sumaNotas = ($nota1 +$nota2 + $nota3)/3;

echo "promedio general de alumno es ",$sumaNotas;
echo "<br>";
$largo = 10;
$ancho = 5;
$metroCuadrado = $largo * $ancho;
echo "total de metrocuadrado ", $metroCuadrado;
$cubierto = 4;
echo "<br>";
$monto = 300;
echo "Monto ingresado",$monto;
$descuento = 300-((15/100)*300);


echo "el monto total es ",$descuento;

echo "<br>";
$hombres = 40;
$mujeres = 60;

$pjHombres = $hombres *100 / ($hombres + $mujeres);

echo "porcentajes de homnres ", $pjHombres,"%";


echo "<br>";





?>