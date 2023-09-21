<?php 

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, saludos";

$archivoACrear= fopen($nombreArchivo, "w"); //Fopen modo escritura "w"

fwrite($archivoACrear,$contenidoArchivo);//Escribe la apertura del archivo

fclose($archivoACrear); // Cierra el archivo

?>