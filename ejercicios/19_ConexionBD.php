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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<table>
    <thead>
        <tr>
            <th>Título</th>
            <th>Fecha</th>
        </tr> 
    </thead>
    <tbody>
        <tr>
            <?php foreach($resultado as $resultad){?>
                <tr>
                    <td>$resultado->archivo</td>
                </tr>
            <?php } ?>
            <td></td>
        </tr>
    </tbody>
</table>