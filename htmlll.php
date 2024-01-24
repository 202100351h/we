<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Cambios</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h3>CASA DE CAMBIOS</h3>
    </header>
    <section>
        <?php
        $soles = isset($_GET['txtSoles']) ? floatval($_GET['txtSoles']) : 0;
        $dolares = isset($_GET['txtDolares']) ? floatval($_GET['txtDolares']) : 0;
        $euros = isset($_GET['txtEuros']) ? floatval($_GET['txtEuros']) : 0;

        $dolar = $soles / 3.71;
        $euro = $soles / 4.05;
        ?>
        <form action="caso1.php" method="get">
            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td>Monto en soles: </td>
                    <td>
                        <input type="text" name="txtSoles" value="<?php echo $soles; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Monto en dólares: </td>
                    <td>
                        <input type="text" name="txtDolares" value="<?php echo $dolares; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Monto en euros: </td>
                    <td>
                        <input type="text" name="txtEuros" value="<?php echo $euros; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Procesar">
                    </td>
                    <td>
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>
                <tr>
                    <td>Total soles: </td>
                    <td>
                        <?php printf("%.2f SOLES", $soles); ?>
                    </td>
                </tr>
                <tr>
                    <td>Total dólares: </td>
                    <td>
                        <?php printf("%.2f DOLARES", $dolar); ?>
                    </td>
                </tr>
                <tr>
                    <td>Total euros: </td>
                    <td>
                        <?php printf("%.2f EUROS", $euro); ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @Jhojan</h6>
    </footer>
</body>

</html>
