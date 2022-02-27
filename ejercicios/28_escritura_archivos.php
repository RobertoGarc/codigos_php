<?php 

$nombreArchivo="documents/archivocreado.txt";
$archivoACrear=fopen($nombreArchivo,"w");

$contenidoArchivo="Creacion de archivo";

fwrite($archivoACrear,$contenidoArchivo);

fclose($archivoACrear);

?>