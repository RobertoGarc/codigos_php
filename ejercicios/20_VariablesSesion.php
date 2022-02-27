<?php 

session_start();

$_SESSION["usuario"]="roberto";
$_SESSION["estatus"]="logueado";

echo "Sesión Iniciada"."<br>";

echo "Usuario: ".$_SESSION["usuario"].", Estado: ".$_SESSION["estatus"];

?>