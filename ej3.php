<?php
/*
Escribe un programa creando una clase 'Empleado' (propiedades: nombre, salario, horasDia), 
que tenga los siguientes métodos e imprima el salario final.

getInfo() que toma el salario, el número de horas de trabajo por día del empleado como parámetro
AddSal() que añade 10€ al salario del empleado si es inferior a 500€.
AddWork() que añade 5€ al salario del empleado si el número de horas de trabajo por día es superior a 6 horas.
*/
class Empleado{
    private $nombre="";
    private $salario="";
    private $horasDias="";
    public function setNom($nombre){
        $this->nombre = $nombre;
    }
    public function setSalario($salario){
        $this->salario = $salario;
    }
    public function setHoras($horas){
        $this->horasDias= $horas;
    }
    public function getInfo(){
        echo "El salario es: ".$this->salario." y las horas trabaja por dia son: ".$this->horasDias."<br>";
    }
    public function getAddSal(){
        if($this->salario < 500){
            $sum=$this->salario+10;
        }
    echo "El nuevo salario es ".$sum."<br>";
    return $sum;
    }
    public function getAddWork(){
        if($this->horasDias > 6){
            $sum=$this->salario+5;
        }
    echo "El nuevo salario es ".$sum;

    }
}
$Empleado=new Empleado();
$Empleado->setNom('maria');
$Empleado->setHoras(45);
$Empleado->setSalario(400);
$Empleado->getInfo();
$Empleado->getAddSal();
$Empleado->getAddWork();
?>
