<?php 


$frutas=array("m"=>"manzana", "p"=>"pera", "b"=>"banana");

print_r($frutas);

echo $frutas["b"]."<br/>";

foreach($frutas as $indice=>&$valor){

    // echo $indice."<br/>"; SE LEE IGUAL QUE LA FORMA DE ABAJO

    // echo $frutas[$indice]."<br/>";

    // Otra forma es
    echo "El valor ".$valor." tiene el indice: ".$indice."<br/>";


}



?>