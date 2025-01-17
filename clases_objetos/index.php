<?php
class Frutas{
    //Propiedades
    public $nombre= '';//cuando lo pons en publico puedes acceder desde fuera
    private $color='';//cuando lo pones privado no puede acceder desde fuera
    //Metodos
    public function getnombre(){
        echo $this->nombre;
    }
    public function setnombre($nom){
        $this->nombre=$nom;
    }
    public function setcolor($colores){//lo que pongamos aqui es lo que pondremos en la linea de bajo en la parte de la derecha
        $this->color=$colores;//la parte de la derecha hae referencia a lo de private, la parte de la derecha es el parametro que nosotros le vamos a pasar bajo
    }
    public function getcolor(){//no hace falta poner parametros en los get , solo en los set
        echo $this->color;
    }
}

$fruta1= new Frutas();
$fruta1 -> setnombre('manzana');//set para añadir 
$fruta1->getnombre();//a la funcion se le llamara get[lo que sea], get para mostrar
$fruta1 ->setcolor('roja');
$fruta1->getcolor();//a la funcion se le llamara get[lo que sea]

//con get y post mejor
?>   