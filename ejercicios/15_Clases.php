<?php 

class Persona{

    private $nombre;

    public function AsignarNombre($nombre){
        $this->nombre=$nombre;
    }

    public function ObtenerNombre(){
        return $this->nombre;
    }

}

$objAlumno=new Persona();
$objAlumno->AsignarNombre("Roberto");
echo $objAlumno->ObtenerNombre();

$objAlumno->AsignarNombre("Daniel");
echo $objAlumno->ObtenerNombre();

?>  