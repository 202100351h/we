<?php
/**
 * Estructuras repetitivas
 * * Operadores de incremento y decremento
 *  ++$variable     incrementa el valor de la variable en uno antes de evaluar la variable
 *  $variable++     incrementa el valor de la variable en uno, evalua y luego incrementa
 *  --$variable     disminuye el valor de la variable en uno antes de evaluar la variable
 *  $variable--     disminuye el valor de la variable en uno, evalua y luego incrementa
 * * Operadores complejos
 *  +=      un operador de aumento y acumulacion
 *  -=      un operador de disminucion y acumulacion
 *  *=      un operador que acumula valores en productos
 *  /=      un operador que acumula divisiones
 * * Contadores
 *  $contador = $contador + 1; // $contador++
 * * Acumuladores
 *  $acumulador = $acumulador + $valor; // $acumulador += $valor
 * 
 * ESTRUCTURA REPETITIVA WHILE
 * 
 * while(condicion){
 *  instruciones a repetir;
 * }
 * 
 */

    /*$i = 10;
    while ($i >= 1) {
        echo $i."<br>";
        $i--;
    }*/

    //Listar los N primeros pares
    /*$n = 20;
    $i = 1;
    while ($i <= $n) {
        if ($i % 2 == 0) {
            echo $i."<br>";
        }
        $i++;
    }*/

    //Listar los N primeros elementos de la siguiente serie: 1/2, 3/4, 5/6,..N
   /* $n = 20;
    $i = 1;
    $num = 1;
    $den = 2;
    while ($i <= $n) {
        echo $num."/".$den."<br>";
        $num+=2;
        $den+=2;
        $i++;
    }*/
    // Listar los N primeros elementos de la siguiente serie: 
    // 1/5, -2/10, 3/15, -4/20..N
    /*$n = 20;
    $i = 1;
    $num = 1;
    $den = 5;
    while ($i <= $n) {
        if ($i % 2 != 0) {
            echo $num."/".$den."<br>";
        }else{
            echo "-".$num."/".$den."<br>";
        }
        $num+=1;
        $den+=5;
        $i++;
    }*/
    //for ($i = 10; $i >= 1; $i--) {
      //  echo $i ."<br>";
    //}

    // ANIDACION DE ESTRUCTURAS REPETITIVAS
   /* $m = 10;
    $conti = 1;
    while ($conti <= $m){
        $b = 1;
        while ($b <= $conti){
            echo $conti;
            $b++;

    } echo "<br>";
    $conti++;
}
*/  


$n = 5;
$conti = 0;
$m = 1000;

while ($conti <= $m){
    $b=1;
    while ($b <= $n && $conti <= $m){
        echo $conti." ";
        $conti +=2;
        $b++;
    }
    echo "<br>";
    $n += 5;


}



?>
