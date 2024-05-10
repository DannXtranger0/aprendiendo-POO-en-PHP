<?php
require_once "saiyajin.php";
#EN PHP NO SE PUEDE HEREDAR DE MULTIPLES CLASES
class SuperSaiyajin extends Saiyajin{
    public $clase = "Pertenezco a la clase Super Saiyajin";

    public function nivelDePelea(){
       $nivel = $this->nivel_pelea*2;
       return $this->nombre . " Aumentó su nivel de pelea a " . $nivel;
    }

    public function transformacion(){
        if($this->nivel_pelea>=1500){
            echo "Se puede transformar en super saiyajin";
        }else{
            echo $this->nombre ." No se puede transformar en super saiyajin";
        }
    }
}
#como el mismo atributo (clase) está en las dos clases, lo sobreescribe y se
#usa en las dos clases con normalidad
