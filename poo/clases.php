 <?php

class Automovil {
    public $marca;
    public $modelo;
    public $color;
    public $precio;

    public function __construct($marca, $modelo, $color, $precio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
    }
}

$automovil_1 = new Automovil("Toyota", "Corolla", "Rojo", 20000);
$automovil_2 = new Automovil("Honda", "Civic", "Azul", 22000);
$automovil_3 = new Automovil("Ford", "Focus", "Blanco", 18000);
$automovil_4 = new Automovil("Chevrolet", "Malibu", "Gris", 25000);
$automovil_5 = new Automovil("Volkswagen", "Jetta", "Negro", 23000);

echo "Lista de Autos: <br>";
echo "$automovil_1->marca $automovil_1->modelo, Color: $automovil_1->color, Precio: $automovil_1->precio<br>";
echo "$automovil_2->marca $automovil_2->modelo, Color: $automovil_2->color, Precio: $automovil_2->precio<br>";
echo "$automovil_3->marca $automovil_3->modelo, Color: $automovil_3->color, Precio: $automovil_3->precio<br>";
echo "$automovil_4->marca $automovil_4->modelo, Color: $automovil_4->color, Precio: $automovil_4->precio<br>";
echo "$automovil_5->marca $automovil_5->modelo, Color: $automovil_5->color, Precio: $automovil_5->precio<br>";
?> 


