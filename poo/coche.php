<?php

class Coche {
    public $color;
    public $potencia;
    public $combustible;
    public $velocidad;
    public $deposito;

    public function __construct($combustible = "gasolina"){
        $this->velocidad = 0;
        $this->combustible = $combustible;
        $this->deposito = 0;
    }

    public function acelerar($litros) {
        if ($this->combustible == "gasolina" && $this->deposito < 10) {
            return 0;
        } else {
            if ($this->combustible == "gasolina") {
                $this->deposito += $litros;
                return $this->velocidad += 10;
            } else {
                return 0;
            }
        }
    }

    public function repostar($tipoCombustible, $litros) {
        if ($this->combustible == $tipoCombustible) {
            $this->deposito += $litros;
            return $this->deposito;
        } else {
            return 0;
        }
    }
    

    public function estado() {
        if ($this->velocidad > 0) {
            return "Moviéndose";
        } else {
            return "Reposo";
        }
    }
}

$miCoche = new Coche('Gasoil');
echo "<br> Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(50). "\n";
echo "<br> Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", 40)."\n";
echo "<br> Combustible después de echar 40 litros de gasóleo: " . $miCoche->repostar("Gasoil", 40) . "\n";
echo "<br> Velocidad después de acelerar con combustible en el depósito: ". $miCoche->acelerar(10). "\n";
echo "<br> Estado del coche: ". $miCoche->estado();
?>
