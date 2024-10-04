<?php

    $diames = array("Enero" => 31,
                    "Febrero"=> array(28,29),
                    "Marzo" => 31,
                    "Abril" => 30,
                    "Mayo" => 31,
                    "Junio" => 30,
                    "Julio" => 31,
                    "Agosto" => 31,
                    "Septiembre" => 30,
                    "Octubre" => 31,
                    "Noviembre" => 30,
                    "Diciembre" => 31,

    );


    foreach ($diames as $clave => $valor) {
        if ($clave === "Febrero"){
            foreach($valor as $valor2){
                echo "$clave tiene $valor2 días <br/>";
            }
        } else {
            echo "$clave tiene $valor días <br/>";
        }

    }
?>