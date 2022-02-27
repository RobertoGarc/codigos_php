<?php 

$server="localhost";
$bd="album";
$user="roberto";
$contraseña="12345678";

try {
    $conexion=new PDO("mysql:host=$server;dbname=$bd", $user, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexión Establecida";

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'foto_2', 'foto.jpg');";
    $conexion->exec($sql);

    $sql="SELECT * FROM `fotos`";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    print_r($resultado);

    foreach ($resultado as $foto) {
        print_r($foto['nombre']);
    }
    
} catch (PDOException $th) {
    echo "Conexión erronea ".$th;
}

?>