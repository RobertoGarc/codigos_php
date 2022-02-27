<?php 

class Persona{

    protected $nombre;

    public function AsignarNombre($nombre){
        $this->nombre=$nombre;
    }

    public function ObtenerNombre(){
        return $this->nombre;
    }

}

class Trabajador extends Persona{
    private $cargo;

    public function AsignarCargo($cargo){
        $this->cargo=$cargo;
    }

    public function Presentarse(){
        echo "Hola soy ".$this->nombre.", y soy ".$this->cargo;
    }
}

$trabajador=new Trabajador();

$trabajador->AsignarNombre("Roberto García");
$trabajador->AsignarCargo("Programador");

$trabajador->Presentarse();

?>  