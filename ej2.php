<?php
//Imprimir el promedio de tres números mediante la creación de una clase llamada 'Average' con un método para calcular e imprimir el promedio.
class Average {
    private $num1;
    private $num2;
    private $num3;
    public function setNum($num1, $num2, $num3) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
    }
public function getPromedio(){
    $promedio=($this->num1 + $this->num2 + $this->num3)/3;
    return $promedio;
}
}
$num=new Average();
$num->setNum(5,6,7);
echo "El promedio es ".$num->getPromedio();
?>