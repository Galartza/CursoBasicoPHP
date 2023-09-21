<?php 

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre) {  // acciones o métodos...

        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre() {

        echo "Hola soy ".$this->nombre;
    }
    public function mostrarEdad(){
        $this->edad=24;
        return $this->edad;
    }
}

class trabajador extends persona{
    public $puesto; // propiedad nueva

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}


$objTrabajador= new trabajador(); // instancia o creación de un objeto
$objTrabajador->asignarNombre("Joaquin Galarza"); // llamando un método
$objTrabajador->puesto="Programador";

$objTrabajador->presentarseComoTrabajador();


?>