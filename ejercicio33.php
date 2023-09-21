<?php

$jsonContenido='[
    {"nombre":"Joaquin", "apellido":"Galarza"},
    {"nombre":"Ricardios", "apellido":"Acm1ptardo"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido."<br/>");
    }

?>