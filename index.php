<?php
require_once "saiyajin.php"; #Así se llama una clase desde otro archivo
#En  el caso de que tengamos los argumentos en orden diferente
#que el que declaramos en los parametros del constructor, podría darnos
#errores, entonces le podemos indicar que argumento va a que parametro

require_once "superSaiyajin.php";

#Con el nombre del parametro y el valor
$goku = new Saiyajin(nivel_pelea:5000,nombre:"Goku");
$gohan = new SuperSaiyajin("Gohan",1200);

echo $goku -> Saludar();
echo $gohan -> Saludar();
echo $gohan -> transformacion();


