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

  $num1 = 2;
  $num2 = 4;
  $num3 = 5;
  $num4 = 6;

  if ($num1>=$num2) {
     if ($num1>$num3) {
       if ($num1>$num4) {
        echo "el mayor numero es ",$num1;
       }else {
        echo "el mayor numero es  ",$num4;
       }
     }else  {
       if ($num3>$num4) {
        echo "el mayor numero es ",$num3;
       }else {
        echo "el mayor numero es ",$num4;
       }
     }
  }elseif ($num2>=$num3) {
    echo "el mayor numero es ",$num2; 
  }elseif ($num3>$num4) {
    echo "el mayor numero es ", $num3;
  }else {
    echo "el mayor numero es ",$num4;
  }

 echo "<br>";
  $num1 = 3;
  $num2 = 2;
  $num3 = 6;
  $num4 = 5;

  if ($num1<$num2) {
   if ($num1<$num3) {
     echo "el menor de los numeros ingresados ", $num1;
   }else {
     if ($num3<$num4) {
      echo "el menor de los numeros ingresados ", $num3;
     }else {
      echo "el menor de los numeros ingresados ", $num4;
     }
   }
  }elseif ($num2<$num3) {
    echo "el menor de los numeros ingresados ", $num2;
  }elseif ($num3<$num4) {
    echo "el menor de los numeros ingresados ", $num3;
  }else {
    echo "el menor de los numeros ingresados ", $num4;
  }
  echo "<br>";
  $num1 = 8;
  $num2 = 3;
  $num3 = 2;
  $num4 = 5;
  $num5 = 4;
  if ($num1 >=$num2) {
    if ($num1>$num3) {
      echo "el mayor numero es ",$num1;
    }else {
      if ($num3>$num4) {
        echo "el mayor numero es ",$num3;
      }else {
        echo "el mayor numero es ",$num3;
      }
    }
  }elseif ($num2>=$num3) {
    echo "el mayor numero es ",$num2;
  }elseif ($num3>$num4) {
    echo "el mayor numero es ", $num3;
  }else {
    echo "el mayor numero es ",$num4;
  }

?>