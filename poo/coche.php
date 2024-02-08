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
            return $this->velocidad;
        } else {
            if ($this->combustible == "gasolina") {
                $this->deposito += $litros;
                return $this->velocidad += 10;
            } else {
                return $this->velocidad;
            }
        }
    }

    public function repostar($tipoCombustible, $litros) {
        if ($this->combustible == $tipoCombustible) {
            return $this->deposito += $litros;
        } else {
            return $this->deposito;
        }
    }

    public function estado() {
        if ($this->velocidad > 0) {
            return "Moviéndose";
        } else {
            return "En reposo";
        }
    }
}

$miCoche = new Coche('Gasoil');
echo "Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10). "<br>";
echo "Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", 40)."<br>";
echo "Combustible después de echar 40 litros de gasóleo: " . $miCoche->repostar("Gasoil", 40) . "<br>";
echo "Velocidad después de acelerar con combustible en el depósito: ". $miCoche->acelerar(10). "<br>";
echo "Estado del coche: ". $miCoche->estado()."<br>";
?>
