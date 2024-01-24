<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Manejo de constantes</h3>
    </header>
    <section>
        <?php
        define("PI",3.1416);
        define("IGV",0.18);
        $radio = 12;
        $ValorVenta = 250.50;
        $area = PI * $radio * $radio;
        $impuesto = $ValorVenta * IGV; 

        echo "<br>El area del circulo con adio $radio es $area";
        echo "<br>El impuesto de venta de $valorVenta es $impuesto";
        ?>
    </section>

    <footer> </footer>
    
</body>
</html>