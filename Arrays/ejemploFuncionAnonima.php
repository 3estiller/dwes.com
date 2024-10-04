<?php
    /*Crea un script que defina un array de números enteros y utilizando una función
    anónima genere un array con el cuadrado de los mismos.*/
    $numeros = array(1,2,3,4,5,6,7,8,9);

    $cuadrado = array_map(function($numb){return $numb * $numb;},$numeros);
    print_r($cuadrado)

    /*$nombrePaises = array_map(function($pais){
        return $pais["pais"];},$aPaises);*/
?>