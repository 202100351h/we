<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa de Cambio</title>
</head>
<body>

<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el monto y la moneda original del formulario
    $monto = floatval($_POST["monto"]);
    $moneda_origen = $_POST["moneda_origen"];

    // Definir tasas de cambio (estas tasas deben ser actualizadas regularmente)
    $tasas_cambio = [
        "USD" => 1.2, // Tasa de cambio de TR a TD
        "EUR" => 1.5, // Tasa de cambio de TR a TD
        // Puedes agregar más tasas de cambio según sea necesario
    ];

    // Verificar si la moneda de destino está definida y obtener la tasa de cambio
    if (isset($tasas_cambio[$moneda_origen])) {
        $tasa_cambio = $tasas_cambio[$moneda_origen];
        
        // Calcular el monto en la nueva moneda
        $monto_convertido = $monto * $tasa_cambio;

        // Mostrar el resultado
        echo "<p>$monto $moneda_origen son equivalentes a $monto_convertido TD.</p>";
    } else {
        echo "<p>La moneda de origen seleccionada no es válida.</p>";
    }
}
?>

<!-- Formulario de conversión -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="monto">Monto:</label>
    <input type="number" name="monto" required step="any">

    <label for="moneda_origen">Moneda de origen:</label>
    <select name="moneda_origen" required>
        <option value="USD">Dólares (TR)</option>
        <option value="EUR">Euros (TR)</option>
        <!-- Puedes agregar más opciones según sea necesario -->
    </select>

    <input type="submit" value="Convertir">
</form>

</body>
</html>
