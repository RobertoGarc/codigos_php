<?php 

$jsonContenido='[
    {"nombre":"Roberto", "apellido":"Garcìa"},
    {"nombre":"José", "apellido":"Perez"}
]';

print_r($jsonContenido);
echo "<br>";
$resultado=json_decode($jsonContenido);
print_r($resultado);
echo "<br>";
foreach ($resultado as $persona){
    print_r($persona);
}
foreach ($resultado as $persona){
    print_r('<br>'.$persona->nombre.' '.$persona->apellido.'<br>');
}
?>