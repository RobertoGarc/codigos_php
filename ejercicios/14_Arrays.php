<?php 

$frutas=array("banana","fresa","mango","guayaba");
array_push($frutas,"uva","sandia","melon","papaya","pera");
echo array_pop($frutas);
print_r($frutas);

$array_aso=array("nombre"=>"roberto","apellido"=>"garcia","edad"=>"26");

print_r($array_aso);

echo $frutas[0].'<br>';

echo $array_aso['edad'];

foreach($array_aso as $array){
    echo $array;
}

foreach ($array_aso as $indice => $fruta) {
    echo $indice.' '.$fruta;
}


?>