<?php
    /**
     * @author Jesús López Funes
     */

    $aPaises = array(
        array("id" => "es","pais" => "España", "capital" => "Madrid"),
        array("id" => "it","pais" => "Italia", "capital" => "Roma"),
        array("id" => "fr","pais" => "Francia", "capital" => "París"),
    );

    // Opción 1
    $nombrePaises = array();
    foreach ($aPaises as $pais){
        $nombrePaises[] = $pais["pais"];
    }


    // Opción 2: con funcion anónima
    $nombrePaises = array_map(function($pais){
        return $pais["pais"];},$aPaises);
?>