<?php
    /**
     * Días de la semana
     * @author Jesús López 
     */

     // Carga en un array los días de la semana

     $diasSemana = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");

     // Calculamos el tamaño del array

     $numDias = count($diasSemana);
     
     // Recorremos el array

     for ($i = 0; $i < $numDias; $i++){
            echo $diasSemana[$i]. "<br>";
     }


?>