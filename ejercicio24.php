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

$objAlumno= new persona(); // instancia o creación de un objeto
$objAlumno->asignarNombre("Joaquin <br/>"); // llamando un método

$objAlumno2=new persona();
$objAlumno2->asignarNombre("Pedro <br/>");
$objAlumno->imprimirNombre();
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre;

echo $objAlumno2->nombre;

echo $objAlumno->mostrarEdad();


?>