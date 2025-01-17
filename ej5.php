<?php
/*
Crear una clase llamada 'Matrix' que conteng un array bi-dimensional con el número de filas 
y el número de columnas La clase Matrix tiene la siguiente información:

número de filas de la matriz
número de columnas de la matriz
elementos de la matriz en forma de matriz 2D
La clase Matrix tiene métodos para cada uno de los siguientes:

obtener el número de filas
obtener el número de columnas
establecer los elementos de la matriz en la posición dada (i,j)
llenar todos los elementos de la matriz con los valores que quieras
mostrar la matrix en un formato tabla HTML
Genera dos instancias de Matrix con valores aleatorios e imprime la matriz. A continuación haz lo que necesites para:

Sumar los dos arrays. Si las matrices no se pueden sumar, se mostrará "Arrays cannot be added".
Multiplicar las dos matrices. Si las matrices no se pueden multiplicar, se mostrará "Arrrays cannot be multiplied".
*/
class matrix{
private $filas="";
private $columnas="";

public function setFilas($filas){
    $this->filas = $filas;
}
public function getFilas(){
    return $this->filas;
}
public function setColumnas($columnas){
    $this->columnas = $columnas;
}
public function getColumnas(){
    return $this->columnas;
}
}
$info=new matrix();
$info->setFilas(4);
$info->setColumnas(4);
$info2=new matrix();
$info2->setFilas(4);
$info2->setColumnas(4);
$muestra1=getarray($info);
$muestra2=getarray($info2);
mostrar($muestra1);
echo"<br>";
mostrar($muestra2);
echo"<br>";
sumar($muestra1,$muestra2);
function getarray($info){
    $tabla=[];
    for($i=0;$i<$info->getFilas();$i++){
        for($j=0;$j<$info->getColumnas();$j++){
            $tabla[$i][$j]=rand(0,10);
        }
    } 
return $tabla;
}
function mostrar($tabla){
    for($i=0;$i<count($tabla);$i++){
        for($j=0;$j<count($tabla[$i]);$j++){
              $muestra= $tabla[$i][$j];
              echo"$muestra"." ";
        }
        echo"<br>";
     }
}
function sumar($tabla1, $tabla2){
    $total=0;
    $total_mult=0;
    if (count($tabla1)!== count($tabla2)){
        echo "Arrays cannot be added and multiplied";
        exit;
    }
    for($i=0;$i<count($tabla1);$i++)
    {
        $mult=0;
        $suma=0;
        for($j=0;$j<count($tabla1[$i]);$j++){
              $suma=$suma+($tabla1[$i][$j]+$tabla2[$i][$j]);
              $mult=$mult+($tabla1[$i][$j]*$tabla2[$i][$j]);
              $total=$total+($tabla1[$i][$j]+$tabla2[$i][$j]);
              $total_mult=$total_mult+($tabla1[$i][$j]*$tabla2[$i][$j]);
            }
            echo"La suma de la fila $i de las tablas es : ".$suma." y la multiplicacion es : ".$mult.".";
        echo"<br>";
     }
     echo"<br>";
     echo"La suma total de las dos tablas es : $total"." y la multiplicacion es : ".$total_mult.".";
}
?>