<?php
 $num = 11; 

  if ($num >10) {
      echo "es mayor a 10  y es : ",$num;
  }else {
      echo "es menor  a 10  y es : ", $num;
  }
  echo "<br>";
  $num1 = 12;
  $num2 = 16;

  if ($num1 > $num2) {
     echo "el numero  menor es : ",$num2;

  }else {
      echo "es  numero menor es  :",$num1;
  }
  
  echo "<br>";
  $num1 = 12;
  $num2 = 12;
  

  if ($num1 > $num2 ) {
      if ($num1 == $num2) {
         echo "ambos numeros son iguales",$num1;
      } else {
        echo "el numero mayor es : ",$num1;
      }
  }else {
    if ($num1 == $num2) {
        echo "ambos numeros son iguales ",$num1;
     } else {
       echo "el numero mayor es : ",$num2;
     }      
  }
  echo "<br>";
  
  $num = 0;

  if ($num >= 0 ) {
    if ($num == 0) {
     echo "el numero es cero";
    }else {
      echo " el numero es positivo ", $num;
    }
  }else {
    echo "el numero es negativo " , $num;
  }
  echo "<br>";
  $numero = 57;
  if ($numero%2==0){
      echo "el $numero es par";
  }else{
      echo "el $numero es impar";
  } 

 echo "<br>";

  $importe = 5001;

  if ($importe >=1000) {
    if ($importe>=5000) {
      $resultado =  $importe - ((18/100)*$importe);
      echo "tu compra fue mayor a 5mil y tenes descuento de 18% valor final ",$resultado; 
        }
        else {
          $resultado =  $importe - ((10/100)*$importe);
          echo "tu compra fue mayor a 1mil y tenes descuento de 10% valor final ",$resultado;  
        }
  }else {
    echo "tu compra fue menos de mil y no tenes descuento ", $importe; 
  }


  echo "<br>";

  $num1 = 1;
  $num2 = 2;
  $num3 = 4;
  $num4 = 3;

  if ($num1>$num2) {
     if ($num2>$num3) {
       echo "el mayor numero es ",$num2;
     }elseif ($num3>$num4) {
      echo "el mayor numero es ",$num3;
     }else {
      echo "el mayor numero es ",$num4;
     }
  }elseif ($num2>$num3) {
    echo "el mayor numero es ",$num2; 
  }elseif ($num3>$num4) {
    echo "el mayor numero es ", $num3;
  }else {
    echo "el mayor numero es ",$num4;
  }







?>