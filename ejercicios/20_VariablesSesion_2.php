<?php 

session_start();

echo "Sesión Iniciada"."<br>";

if(isset($_SESSION["usuario"])){
    echo "Usuario: ".$_SESSION["usuario"].", Estado: ".$_SESSION["estatus"];
}else{
    echo "No hay datos";
}


?>