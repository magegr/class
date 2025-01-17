<?php
/*
Imprime la suma, la diferencia y el producto de dos números complejos creando una clase llamada 'Complex' 
con métodos separados para cada operación cuyas partes real e imaginaria. Crea también el método que obtiene la salida formateada como A + Bj.

Consulta como se opera con números complejos en la página  Operaciones con números complejos.
*/
class Complex {
    private $real;
    private $imaginario;
    public function setReal($real) {
        $this->real = $real;
    }
    public function getReal() {
        return $this->real;
    }
    public function setImaginario($imaginario) {
        $this->imaginario = $imaginario;
    }
    public function getImaginario() {
        return $this->imaginario;
    }

}
$numeros=new Complex();
$numeros->setReal(5);
$numeros->setImaginario(5);
$numeros2=new Complex();
$numeros2->setReal(3);
$numeros2->setImaginario(5);
getSuma($numeros,$numeros2);
getDiferencia($numeros,$numeros2);
getMulti($numeros,$numeros2);
function getFormato(){
//queria que se pusiera la letra al lado del numero, no se 
}
function getSuma($complex1,$complex2){
    $real=$complex1->getReal()+$complex2->getReal();
    $imaginario=$complex1->getImaginario()+$complex2->getImaginario();
    echo "La suma es $real+$imaginario"."i"."<br>";
}
function getDiferencia($complex1,$complex2){
    $real=$complex1->getReal()-$complex2->getReal();
    $imaginario=$complex1->getImaginario()-$complex2->getImaginario();
echo "La resta es $real-$imaginario"."i"."<br>";
}
function getMulti($complex1,$complex2){
    $real=$complex1->getReal()*$complex2->getReal();
    $imaginario=$complex1->getImaginario()*$complex2->getImaginario();
echo "La multiplicacion es $real*$imaginario"."i";
}


?>