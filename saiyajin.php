<?php

class Saiyajin{
    public $clase = "Pertenezco a la Clase Saiyajin";
    #se le puede asignar el tipo de dato a los atributos
    #o no 
    // public string $nombre;
    // public float $nivel_pelea;

    #El Constructor Property Promotion Recorta el código al millón
    #sin necesidad de declarar los atributos arriba, se crean en el constructor y ya está
    public function __construct(public $nombre, public $nivel_pelea){
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
}

// $goku = new Saiyayin("Goku",1000);
// $vegeta = new Saiyayin("Vegeta",950);
// echo $goku -> Saludar();
// echo $vegeta -> Saludar();
