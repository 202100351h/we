<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la página</title>
</head>

<body>
    <header>
        <h3>2.- FUNCION DE CADENA</h3>
    </header>
    <section>
        <form action="actividad.php" method="post">
            <?php
            error_reporting(0);

            $Cadena1 = $_POST['txtDato1'] ?? '';
            $Cadena2 = $_POST['txtDato2'] ?? '';
            $funcion = $_POST['selCadena'] ?? '';
            $cadenaStrstr = $_POST['CadenaStrstr'];
            $palabraBuscarStrstr = $_POST['PalabraBuscarStrstr'];
            $buscar = $_POST['Buscar'];
            $reemplazar = $_POST['Reemplazar'];
            $cadena = htmlspecialchars($_POST['txtCadena'] ?? '');
            $relleno = isset($_POST['Relleno']) ? $_POST['Relleno'] : '*';
            $longitud = isset($_POST['Longitud']) ? $_POST['Longitud'] : '';
            $tipoRelleno = isset($_POST['TipoRelleno']) ? $_POST['TipoRelleno'] : 'STR_PAD_RIGHT';

            

            $selStrlen = ($funcion == 'Strlen') ? 'selected' : '';
            $selStrpos = ($funcion == 'Strpos') ? 'selected' : '';
            $selStrcmp = ($funcion == 'Strcmp') ? 'selected' : '';
            $selStrstr = ($funcion == 'Strstr') ? 'selected' : '';
            $selSubstr = ($funcion == 'Substr') ? 'selected' : '';
            $selTrimFunctions = ($funcion == 'Ltrim' || $funcion == 'Rtrim' || $funcion == 'Chop' || $funcion == 'Trim') ? 'selected' : '';
            $selStrReplace = ($funcion == 'Str_Replace') ? 'selected' : '';
            $selCaseFunctions = ($funcion == 'Strtolower' || $funcion == 'Strtoupper') ? 'selected' : '';
            $selPregMatch = ($funcion == 'Preg_Match') ? 'selected' : '';
            $selExplode = ($funcion == 'Explode') ? 'selected' : '';
            $selStrrev = ($funcion == 'Strrev') ? 'selected' : '';
            $selStrRepeat = ($funcion == 'Str_Repeat') ? 'selected' : '';
            $selStrPad = ($funcion == 'Str_Pad') ? 'selected' : '';
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><h2>Ingrese la cadena: </h2></td>
                    <td>
                        <input type="text" name="txtCadena" value="<?php echo $cadena; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Seleccione una función para la cadena: </td>
                    <td>
                        <select name="selCadena">
                            <option value="Strlen" <?php echo $selStrlen; ?>>Strlen</option>
                            <option value="Strpos" <?php echo $selStrpos; ?>>Strpos</option>
                            <option value="Strcmp" <?php echo $selStrcmp; ?>>Strcmp</option>
                            <option value="Strstr" <?php echo $selStrstr; ?>>Strstr</option>
                            <option value="Substr" <?php echo $selSubstr; ?>>Substr</option>
                            <option value="Ltrim" <?php echo $selTrimFunctions; ?>>Ltrim</option>
                            <option value="Rtrim" <?php echo $selTrimFunctions; ?>>Rtrim</option>
                            <option value="Chop" <?php echo $selTrimFunctions; ?>>Chop</option>
                            <option value="Trim" <?php echo $selTrimFunctions; ?>>Trim</option>
                            <option value="Str_Replace" <?php echo $selStrReplace; ?>>Str_Replace</option>
                            <option value="Strtolower" <?php echo $selCaseFunctions; ?>>Strtolower</option>
                            <option value="Strtoupper" <?php echo $selCaseFunctions; ?>>Strtoupper</option>
                            <option value="Preg_Match" <?php echo $selPregMatch; ?>>Preg_Match</option>
                            <option value="Explode" <?php echo $selExplode; ?>>Explode</option>
                            <option value="Strrev" <?php echo $selStrrev; ?>>Strrev</option>
                            <option value="Str_Repeat" <?php echo $selStrRepeat; ?>>Str_Repeat</option>
                            <option value="Str_Pad" <?php echo $selStrPad; ?>>Str_Pad</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Realizar operación"></td>
                    <td colspan="2" align="center"><input type="reset" value="Refresh"></td>
                </tr>

                <?php
                if (!empty($funcion)) {
                    if ($funcion == 'Strlen') {
                        $resultado = strlen($cadena);
                        echo "<tr><td colspan='2'>La función Strlen devuelve la longitud de la cadena.</td></tr>";

                    } elseif ($funcion == 'Strpos') {
                        $resultado = strpos($cadena, 'buscar');
                        echo "<tr><td colspan='2'>La función Strpos busca la posición de 'buscar' en la cadena.</td></tr>";

                    } elseif ($funcion == 'Strcmp') {
                        
                        if (isset($_POST['Cadena1']) && isset($_POST['Cadena2'])) {
                            
                            $Cadena1 = $_POST['Cadena1'];
                            $Cadena2 = $_POST['Cadena2'];
                    
                            $resultado = strcmp($Cadena1, $Cadena2);
                    
                            echo "<tr>
                                    <td colspan='2'>La función Strcmp compara las cadenas '$Cadena1' y '$Cadena2'.</td>
                                 </tr>";
                            echo "<tr><td>Resultado:</td><td>$resultado</td></tr>";
                        } else {
                            echo "<form method='post' action='actividad.php'>";
                            echo "<tr>
                                    <td>Cadena1:</td><td><input type='text' name='Cadena1'></td>
                                 </tr>";
                            echo "<tr>
                                   <td>Cadena2:</td><td><input type='text' name='Cadena2'></td>
                                 </tr>";
                            echo "<tr>
                                   <td colspan='2'><input type='submit' value='Comparar'></td>
                                 </tr>";
                            echo "</form>";
                        }
                            echo "La función strcmp en PHP compara dos cadenas y devuelve un valor entero. El valor de retorno puede ser:

                            0: Si ambas cadenas son iguales.
                            Menor que 0: Si la primera cadena es menor que la segunda en orden lexicográfico.
                            Mayor que 0: Si la primera cadena es mayor que la segunda en orden lexicográfico.";
                    }
                    elseif ($funcion == 'Strstr') {
                        if (isset($_POST['CadenaStrstr']) && isset($_POST['PalabraBuscarStrstr'])) {
                            $cadenaStrstr = $_POST['CadenaStrstr'];
                            $palabraBuscarStrstr = $_POST['PalabraBuscarStrstr'];
                            $resultado = strstr($cadenaStrstr, $palabraBuscarStrstr);
                            echo "<tr><td colspan='2'>La función Strstr devuelve la parte de la cadena a partir de '$palabraBuscarStrstr'.</td></tr>";
                            echo "<tr><td>Resultado:</td><td>$resultado</td></tr>";
                        } else {
                            echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
                            echo "<tr><td>Cadena:</td><td><input type='text' name='CadenaStrstr'></td></tr>";
                            echo "<tr><td>Palabra a buscar:</td><td><input type='text' name='PalabraBuscarStrstr'></td></tr>";
                            echo "<tr><td colspan='2'><input type='submit' value='Buscar'></td></tr>";
                            echo "</form>";
                        }
                        echo "<tr><td colspan='2'>La función Strstr devuelve la parte de la cadena a partir de 'buscar'.</td></tr>";
                    }
                        

                    elseif ($funcion == 'Substr') {
                        if (isset($_POST['CadenaSubstr']) && isset($_POST['Inicio']) && isset($_POST['Longitud'])) {
                            $cadenaSubstr = $_POST['CadenaSubstr'];
                            $inicio = (int)$_POST['Inicio'];
                            $longitud = (int)$_POST['Longitud'];
                    
                            $resultado = substr($cadenaSubstr, $inicio, $longitud);
                            echo "<tr><td colspan='2'>La función Substr devuelve una parte de la cadena desde el carácter $inicio hasta el carácter " . ($inicio + $longitud - 1) . ".</td></tr>";
                            echo "<tr><td>Resultado:</td><td>$resultado</td></tr>";
                        } else {
                            echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
                            echo "<tr><td>Cadena:</td><td><input type='text' name='CadenaSubstr'></td></tr>";
                            echo "<tr><td>Inicio:</td><td><input type='text' name='Inicio'></td></tr>";
                            echo "<tr><td>Longitud:</td><td><input type='text' name='Longitud'></td></tr>";
                            echo "<tr><td colspan='2'><input type='submit' value='Obtener Substring'></td></tr>";
                            echo "</form>";
                            echo "<tr><td colspan='2'>Ingrese la cadena y especifique el rango de caracteres utilizando los campos 'Inicio' y 'Longitud'.</td></tr>";
                        }
                    
                    } elseif ($funcion == 'Ltrim') {
                        $resultado = ltrim($cadena);
                        echo "<tr><td colspan='2'>La función Ltrim elimina los espacios en blanco del lado izquierdo de la cadena.</td></tr>";
                        echo "<tr><td>Resultado:</td><td>'$resultado'</td></tr>";
                    
                    } elseif ($funcion == 'Rtrim') {
                        $resultado = rtrim($cadena);
                        echo "<tr><td colspan='2'>La función Rtrim elimina los espacios en blanco del lado derecho de la cadena.</td></tr>";
                        
                    
                    } elseif ($funcion == 'Chop') {
                        $resultado = chop($cadena);
                        echo "<tr><td colspan='2'>La función Chop elimina los espacios en blanco del final de la cadena.</td></tr>";
                        echo "<tr><td>Resultado:</td><td>'$resultado'</td></tr>";
                    
                    } elseif ($funcion == 'Trim') {
                        $resultado = trim($cadena);
                        echo "<tr><td colspan='2'>La función Trim elimina los espacios en blanco del inicio y el final de la cadena.</td></tr>";
                        echo "<tr><td>Resultado:</td><td>'$resultado'</td></tr>";
                    }
                
                    elseif ($funcion == 'Str_Replace')             
                    if (isset($_POST['Buscar']) && isset($_POST['Reemplazar'])) {
                        $buscar = $_POST['Buscar'];
                        $reemplazar = $_POST['Reemplazar'];
                        $buscar = trim($buscar);
                        $reemplazar = trim($reemplazar);
                        $resultado = isset($cadena) ? str_replace($buscar, $reemplazar, $cadena) : '';
        
                        echo "<tr><td colspan='2'>La función Str_Replace reemplaza todas las ocurrencias de '$buscar' con '$reemplazar' en la cadena proporcionada.</td></tr>";
                        echo "<tr><td>Resultado:</td><td>'$resultado'</td></tr>";
                    } else {
                        echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
                        echo "<input type='hidden' name='selCadena' value='Str_Replace'>";
                        echo "<tr><td>Cadena:</td><td><input type='text' name='txtCadena' value='$cadena'></td></tr>";
                        echo "<tr><td>Buscar:</td><td><input type='text' name='Buscar'></td></tr>";
                        echo "<tr><td>Reemplazar:</td><td><input type='text' name='Reemplazar'></td></tr>";
                        echo "<tr><td colspan='2'><input type='submit' value='Reemplazar'></td></tr>";
                        echo "</form>";
                        echo "<tr><td colspan='2'>Ingrese la cadena y especifique las cadenas 'Buscar' y 'Reemplazar' para realizar el reemplazo.</td></tr>";
                    }
                
                
                
                 elseif ($funcion == 'Strtolower') {
                        $resultado = strtolower($cadena);
                        echo "<tr><td colspan='2'>La función Strtolower convierte la cadena a minúsculas.</td></tr>";

                    } elseif ($funcion == 'Strtoupper') {
                        $resultado = strtoupper($cadena);
                        echo "<tr><td colspan='2'>La función Strtoupper convierte la cadena a mayúsculas.</td></tr>";

                    } elseif ($funcion == 'Preg_Match') {
                        $patron = '/\d+/';
                        if (preg_match($patron, $cadena)) {
                            $resultado = 'Coincidencia encontrada';
                            echo "<tr><td colspan='2'>La función Preg_Match busca dígitos en la cadena.</td></tr>";
                        } else {
                            $resultado = 'No se encontraron coincidencias';
                            echo "<tr><td colspan='2'>La función Preg_Match no encontró dígitos en la cadena.</td></tr>";
                        }

                    } elseif ($funcion == 'Explode') {
                        $resultado = implode(', ', explode(' ', $cadena));
                        echo "<tr><td colspan='2'>La función Explode divide la cadena en un array usando el espacio como delimitador.</td></tr>";

                    } elseif ($funcion == 'Strrev') {
                        $resultado = strrev($cadena);
                        echo "<tr><td colspan='2'>La función Strrev invierte la cadena.</td></tr>";

                    } elseif ($funcion == 'Str_Repeat') {
                        if (isset($_POST['Repeticiones'])) {
                            $repeticiones = intval($_POST['Repeticiones']); 
                            $resultado = isset($cadena) ? str_repeat($cadena, $repeticiones) : '';
                
                            echo "<tr><td colspan='2'>La función Str_Repeat repite la cadena $repeticiones veces.</td></tr>";
                            echo "<tr><td>Resultado:</td><td>'$resultado'</td></tr>";
                        } else {
                            echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
                            echo "<input type='hidden' name='funcion' value='Str_Repeat'>";
                            echo "<tr><td>Cadena:</td><td><input type='text' name='Cadena' value='$cadena'></td></tr>";
                            echo "<tr><td>Repeticiones:</td><td><input type='number' name='Repeticiones' value='$repeticiones'></td></tr>";
                            echo "<tr><td colspan='2'><input type='submit' value='Repetir'></td></tr>";
                            echo "</form>";
                            echo "<tr><td colspan='2'>Ingrese la cadena y el número de repeticiones para utilizar la función Str_Repeat.</td></tr>";
                        }
                    


                    } elseif ($funcion == 'Str_Pad') {
                        if (isset($_POST['Relleno']) && isset($_POST['Longitud']) && isset($_POST['TipoRelleno'])) {
                            $longitud = intval($_POST['Longitud']); 
                
                            
                            $resultado = isset($cadena) ? str_pad($cadena, $longitud, $relleno, constant($tipoRelleno)) : '';
                
                            echo "<tr><td colspan='2'>La función Str_Pad rellena la cadena '$cadena' ";
                            echo "con el carácter '$relleno' hasta alcanzar una longitud de $longitud caracteres en la posición '$tipoRelleno'.</td></tr>";
                            echo "<tr><td>Resultado:</td><td>'$resultado'</td></tr>";
                        } else {
                            echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
                            echo "<input type='hidden' name='funcion' value='Str_Pad'>";
                            echo "<tr><td>Cadena:</td><td><input type='text' name='Cadena' value='$cadena'></td></tr>";
                            echo "<tr><td>Relleno:</td><td><input type='text' name='Relleno' value='$relleno'></td></tr>";
                            echo "<tr><td>Longitud:</td><td><input type='number' name='Longitud' value='$longitud'></td></tr>";
                            echo "<tr><td>Tipo de Relleno:</td><td>";
                            echo "<select name='TipoRelleno'>";
                            echo "<option value='STR_PAD_LEFT' " . ($tipoRelleno == 'STR_PAD_LEFT' ? 'selected' : '') . ">STR_PAD_LEFT</option>";
                            echo "<option value='STR_PAD_RIGHT' " . ($tipoRelleno == 'STR_PAD_RIGHT' ? 'selected' : '') . ">STR_PAD_RIGHT</option>";
                            echo "<option value='STR_PAD_BOTH' " . ($tipoRelleno == 'STR_PAD_BOTH' ? 'selected' : '') . ">STR_PAD_BOTH</option>";
                            echo "</select></td></tr>";
                            echo "<tr><td colspan='2'><input type='submit' value='Rellenar'></td></tr>";
                            echo "</form>";
                            echo "<tr><td colspan='2'>Ingrese la cadena, el carácter de relleno, la longitud y el tipo de relleno para utilizar la función Str_Pad.</td></tr>";
                        }
                    
                    }
                }
                
                ?>

                <tr>
                    <td>El resultado de la función es: </td>
                    <td><?php echo $resultado; ?></td>
                </tr>
            </table>
        </form>
    </section>

    <footer>
        <h6>Todos los derechos reservados @Jhojan@</h6>
    </footer>
</body>

</html>
