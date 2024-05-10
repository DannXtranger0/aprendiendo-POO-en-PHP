<?php

class Saiyajin{
   
    #Una propiedad o metodo estatico, siempre será public
    #Una propiedad declarada como estatic no puede ser accedida con un objeto
    #de clase instanciado(aunque si es un metodo estatico, si lo puede hacer)

    #Un metodo estatico no puede acceder a los atributos "Normales" de la clase
    public static $cabello ="Negro";
     public $clase = "Pertenezco a la Clase Saiyajin";
    #se le puede asignar el tipo de dato a los atributos
    #o no 
    // public string $nombre;
    // public float $nivel_pelea;

    #El Constructor Property Promotion Recorta el código al millón
    #sin necesidad de declarar los atributos arriba, se crean en el constructor y ya está
    public function __construct(private $nombre, public $nivel_pelea){
    //      $this->nombre = $nombre;
    //      $this->nivel_pelea = $nivel;
    }

    #También se le puede asignar o no el tipo de dato a los parametros
    public function Saludar():string{ #El :string es lo que devolverá si o si la función, así con todos los tipos de dato
        return "Hola, soy " . $this->nombre . " Y tengo un poder de pelea de " . $this->nivelDepelea() . " " .  $this->clase . "<br><br><br>" ;
    }

    public function nivelDePelea(){
        return "tiene " . $this->nivel_pelea . " puntos de pelea";
    }

    #Setters y Getters

    public function getNombre(){
        return $this->nombre;
    }

    public function getNivel_pelea(){
        return $this -> nivel_pelea;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setNivel_pelea($nivel_pelea){
        $this -> nivel_pelea = $nivel_pelea;
    }


}

// $goku = new Saiyayin("Goku",1000);
// $vegeta = new Saiyayin("Vegeta",950);
// echo $goku -> Saludar();
// echo $vegeta -> Saludar();
