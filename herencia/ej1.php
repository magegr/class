<?php
class animal{
    protected $nombre ='';
    protected $edad ='';
    protected $vacunado='';

    function __construct($name,$age,$vac="no"){
        $this->nombre=$name;
        $this->edad=$age;
        $this->vacunado=$vac;
    }
    public function manifestar(){
        
    }
    public function desplazar(){
        
    }
    public function vacunar (){
    }
}
class perro extends animal{
   private $raza = "";
   function __construct($name, $age, $vac = 'no',$raza){
    parent::__construct($name, $age, $vac = 'no');
    $this -> raza = $raza;
   }
   public function muestra(){//si no ponemos el protected y usamos el private , entonces tenemos que crear los geters,sino no funcionara
       return "El perro se llama". $this->nombre.", tiene una edad de". $this->edad.", ".$this->vacunado." esta vacunado y su raza es".$this->raza;
}
    public function manifestar(){
        return "el perro ladra";
    }
    public function desplazar(){
        return "el perro de desplaza a 4 patas";
    }
    public function vacunar (){
    }
    }
class gaviota extends animal{
    private $plumaje ="";
    function __construct($name, $age, $vac ='no',$plumaje){
        parent::__construct($name, $age, $vac = 'no');
        $this -> plumaje = $plumaje;
    }
    public function muestra(){
        return "la gaviota se llama".$this->nombre.", tiene una edad de".$this->edad.",".$this->vacunado ."esta vacunado y tiene un plumaje ".$this->$plumaje;
    }
    public function manifestar(){
        return "la gaviota chilla";
    }
    public function desplazar(){
        return "Y se desplaza volando";
    }
    public function vacunar (){
    }
}
$perro1 = new perro ('pipo',50,'yes',"pastor aleman");
echo $perro1 -> manifestar();
echo $perro1 -> desplazar();
echo $perro1->muestra();
$gaviota1=new gaviota ('pipo',50,'no','blanco');
echo $gaviota1 -> manifestar();
echo $gaviota1 -> desplazar();
echo $gaviota1->muestra();














?>