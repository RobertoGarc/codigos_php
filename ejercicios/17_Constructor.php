<?php 

class Persona{

    private $nombre;

    function __construct($nombre){
        $this->nombre=$nombre;
    }

    public function AsignarNombre($nombre){
        $this->nombre=$nombre;
    }

    public function ObtenerNombre(){
        return $this->nombre;
    }

}

$objAlumno=new Persona('Roberto');
echo $objAlumno->ObtenerNombre();

?>  