<?php
/*
Escribe un programa para imprimir el área y el perímetro de un triángulo creando una clase llamada 'Triangle'. 
El triángulo tendrá como propiedades sus 3 lados. Puedes utilizar un constructor. Utiliza la fórmula de Heron.
*/

class Triangulo{
    //propiedades
    private $lado1='';
    private $lado2='';
    private $lado3='';
    //metodos
    function __construct($lado1,$lado2,$lado3){
        $this -> lado1 = $lado1;
        $this -> lado2 = $lado2;
        $this -> lado3 = $lado3;
    }
    public function getArea(){

         $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
         $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
 
         return $area;
    }
    public function getPerimetro(){
        return $this->lado1+$this->lado2+$this->lado3;
    }

}
//definicion de objetos
$triangulo=new Triangulo(5,6,8);
echo "El triángulo tiene un área de: " . $triangulo->getArea() . " y el perímetro es: " . $triangulo->getPerimetro();
?>