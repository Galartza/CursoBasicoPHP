<?php 

class persona{

    public $nombre; // propiedades
        private $edad;
        protected $altura;

        function __construct($nuevoNombre){

            $this->nombre=$nuevoNombre;

        }
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

$objAlumno= new persona("Joaquin Galarza"); // instancia o creación de un objeto
//$objAlumno->asignarNombre("Joaquin"); // llamando un método
$objAlumno->imprimirNombre();



?>