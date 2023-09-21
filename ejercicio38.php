<?php 

// Abriendo un archivo para leer un contenido.
$archivo="contenido.txt";

$archivoAbierto=fopen($archivo,"r"); // Foopen abre el archivo

$contenido=fread($archivoAbierto,filesize($archivo)); //Fread lee el archivo

echo $contenido;

?>