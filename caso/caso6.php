<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h3>Venta de productos </h3>
    </header>

    <section>
        <form action="caso6.php" method="post">
            <?php
            error_reporting(0);
            $cliente = $_POST['txtCliente'];
            $producto = $_POST['selProducto'];
            $cantidad = $_POST['txtCantidad'];

            if ($producto == 'Cosina') {
                $selCosina = 'selected';
            } else {
                $selCosina = "";
            }
            if ($producto == 'Refrigeradora') {
                $selRefrigeradora = 'selected';
            } else {
                $selRefrigeradora = "";
            }
            if ($producto == 'Television') {
                $selTelevision = 'selected';
            } else {
                $selTelevision = "";
            }
            if ($producto == 'Lavadora') {
                $selLavadora = 'selected';
            } else {
                $selLavadora = "";
            }
            if ($producto == 'Radiograbadora'){
                $selRadiograbadora = 'selected';
            } else {
                $selRadiograbadora = "";
            }
            ?>

            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td>Cliente: </td>
                    <td>
                        <input type="text" name="txtCliente" value="<?php echo $cliente; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Producto: </td>
                    <td>
                        <select name="selProducto">
                            <option value="Cosina" <?php echo $selCosina; ?>>Cosina</option>
                            <option value="Refrigeradora" <?php echo $selRefrigeradora; ?>>Refrigeradora</option>
                            <option value="Television" <?php echo $selTelevision; ?>>Television</option>
                            <option value="Lavadora" <?php echo $selLavadora; ?>>Lavadora</option>
                            <option value="Radiograbadora" <?php echo $selRadiograbadora; ?>>Radiograbadora</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Cantidad: </td>
                    <td>
                        <input type="text" name="txtCantidad" value="<?php echo $cantidad; ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Procesar"></td>
                    <td><input type="reset" value="Limpiar"></td>
                </tr>
                <?php
                    $pagoProducto = 0;
                    if ($producto == 'Cosina') {
                        $pagoProducto = 1200.00;
                    } elseif ($producto == 'Refrigeradora') {
                        $pagoProducto = 2500.00;
                    } elseif ($producto == 'Television') {
                        $pagoProducto = 3200.00;
                    } elseif ($producto == 'Lavadora') {
                        $pagoProducto = 1000.00;
                    } elseif ($producto == 'Radiograbadora') {
                        $pagoProducto = 700.00;
                    }

                    $subtotal = $cantidad * $pagoProducto;
                    $descuento = $subtotal > 10000 ? 0.1 : 0.05;
                    $montoDescuento = $subtotal * $descuento;
                    $montoPagar = $subtotal - $montoDescuento;
                ?>
                <tr>
                    <td>Precio producto:</td>
                    <td><?php echo $pagoProducto; ?></td>
                </tr>
                <tr>
                    <td>Subtotal a pagar:</td>
                    <td><?php echo $subtotal; ?></td>
                </tr>
                <tr>
                    <td>Monto de descuento:</td>
                    <td><?php echo $montoDescuento; ?></td>
                </tr>
                <tr>
                    <td>Monto a pagar:</td>
                    <td><?php echo $montoPagar; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
         </form>
     </section>
 </body>
</html>



