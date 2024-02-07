<?php
class GatoEjemplo{
    public $color;
    public $raza;
    public $sexo;
    public $edad;
    public $peso;
    //
    public function maulla(){
        echo "miauuu";
    }
    public function ronronea(){
        echo "mrrrrrr";
    }
    public function come($comida){
        if($comida == "pescado"){
            echo "<br>Hmmmm miau miau";
        }else{
            echo "Mrrrrrr";
        }
    }

    public function peleaCon(GatoEjemplo $rival){ 
        if($rival->sexo == "hembra"){
            echo "<br> no peleo con gatitas ";
        }else{
            echo "ven aqui que te voy a desmadrear";
        }
    }
}
$silvestre = new GatoEjemplo;
$TOM = new GatoEjemplo;

echo "Hola gatito";
$silvestre->ronronea();
echo "<br> Toma tus croquetas";
$silvestre->come("croquetas");
echo "<br> mejor te doy pescado";
$silvestre->come("pescado");
echo "<br> veo otro gatito";

$TOM->sexo = "macho"; 
$silvestre->peleaCon($TOM);

$alejandra = new GatoEjemplo;
$alejandra->sexo = "hembra";

$alejandra->peleaCon($alejandra);

?>
