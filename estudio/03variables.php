<?php
define("SALTO", "<br>");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cuarto script PHP</title>
    </head>

    <body>
        <h1>Variables</h1>
<?php
    // Las variables se definen con $identificador
    $nombre_variable = "Valor de la variable";

    // Variables que no se han definido
    $resultado = $numero + 25;
    echo "El valor de número es $numero y el resultado es $resultado<br>";

    $resultado = $sin_definir + 5.5;
    echo "El valor de sin definir es $sin_definir y el resultado es $resultado<br>";

    // Si la variable está en un contexto lógico su valor
    // lógico asume por defecto False

?>
    <h2>Análisis de variables</h2>
    <h3>Análisis simple</h3>
<?php
    // Consiste en introducir una variable en una cadena con " o heredoc
    // para incrustar su valor de la cadena.
    echo "El resultado es $resultado<br>";

?>

    <h3>Análisis complejo</h3>
<?php
    // En algunas situaciones nos encontramos ambigüedad en 
    // una variable interpolada. Para ello usamos las llaves
    // y se elimina la ambigüedad.
    $calle = "Trafalgar Sq";
    $numero = "5";
    $poblacion = "London";
    $distrito = "50000";

    echo "Mi dirección en Londres es {$numero}th, {$calle}<br>$poblacion<br>$distrito<br>";

?>
    <h2>Funciones para variables</h2>
<?php
    // Función gettype()
    $numero = 10;
    echo "El tipo de datos de $resultado es " . gettype($resultado) . "<br>";
    echo "El tipo de datos de una expresión es " . gettype($numero + 5.5) . "<br>";

    // Función empty()
    /* Comprueba si una variable tiene valor 
        -Si es entero devuelve True sk es 0, False en caso contrario.
        -Si es float devuelve True si es 0.0, False en caso contrario.
        -Si es cadena devuelve True si es "", False en caso contrario.
        -Devuelve True si es NULL o False.
    */

    if (empty($numero)) echo "|$numero tiene el valor $numero<br>";
    else echo "\$numero tiene un valor no vacío<br>";

    $numero = NULL;
    if (empty($numero)) $numero = 10;
    else echo "\$numero ya tiene un valor asignado y es $numero<br>";

    // Función isset()
    // Devuelve True si la variable está definida y no es NULL
    if (isset($nueva_variable)) echo "La variable está definida y su valor es $nueva _variable<br>";
    else echo "La variable no está definida<br>";

    $variable_null = NULL;
    if (isset($variable_null)) echo "La variable está definida<br>";
    else echo "La variable $variable_null no está definida o tiene valor NULL";

    /* Funciones que comprueban los tipos de datos
        - is_bool() -> True si la expresión es boolenaa
        - is _int() -> True si la expresión es un int
        - is _float() -> True si la expresión es un float
        - is_string() -> True si la expresión es una cadena
        - is_array() -> True si la expresión es un array

        En cualquier otro caso, devuelve false
    */

    $edad = 25;
    $mayor_edad = $edad > 18;
    $numero_e = 2.71;
    $mensaje = "El número e es " . $numero_e . "<br>";

    if (is_int($edad)) echo "\$edad es un entero<br>";

    if (is_bool($mayor_edad)) echo "\$mayor de edad es booleana<br>";

    if (is_float($numero_e)) echo "\$numero_e es un float";

    if (is_string(($mensaje))) echo "\$mensaje es una cadena";
?>

    <h2>Constantes</h2>
    <p>Una constante es un valor con nombr eque no puede cambiar de valor en el programa. 
        Se le asigna un balor en la declaración y permanece invariable.
        Se define de dos maneras:<br>
        - Mediante la función define()
        - Mediante la palabra clave const
    </p>

<?php
    define("PI", 3.14159);
    define("PRECIO_BASE", 1500);
    define("DIRECTORIO_SUBIDAS", "/uploads/archivos");

    echo "El número PI es " . PI . "<br>";
    $area_circulo = PI * PI * 5;
    echo "El área del círculo de radio 5 es $area_circulo<br>";

    $path_archivo = DIRECTORIO_SUBIDAS . "/archivo.pdf";
    echo "El archivo subido es $path_archivo<br>";

    $precio_rebajado = PRECIO_BASE - PRECIO_BASE * 0.25;
    echo "El precio rebajado es $precio_rebajado<br>";

    const SESION_USUARIO = 600;
    echo "La sesión de usuario finaliza en " . SESION_USUARIO . "segundos<br>";

    // Constantes predefinidas por PHP
    echo "El script es " . __FILE__ . " y la línea es " . __LINE__. SALTO;

?>
    <h2>Expresiones, operadores y operandos</h2>
    <p>Una expresión es una combinación de operandos y operadores que arroja un resultado.
        Tiene tipo de datos, que depende del tipo de datos de sus operandos y de la operación realizada.
        Un operador es un símbolo formado por uno, dos o tres caracteres que denota una operación. <br>
        Los operadores pueden ser: <br>
        - Unarios. Solo necesitan un operando.
        - Binarios. Utilizan dos operandos.
        - Ternarios. Utilizan tres operandos.

        Un operando es una expresión en sí misma, siendo la más simple un literal o una variable, 
        pero también puede ser un valor devuelto por una función o el resultado de otra expresión. <br>
        Las operaciones de una expresión no se ejecutan a la vez, sino en orden seguún la precedencia
        y asociatividad de los operadores. Esta puede alterar a conveniencia.</p>

    <h2>Operadores</h2>
    <h3>Asignación</h3>
<?php
    // El operador de asignación es =
    $numero = 45;
    $resultado = $numero + 5 - 29;
    $sin_valor = NULL;

?> 

    <h3>Operadores aritméticos</h3>

<?php
    /*  + Suma
        - Resta
        / División
        % Módulo
        ** Exponenciación

        Unarios
        + Conversión a entero
        - El opuesto
    */
    $numero1 = 15;
    $numero2 = 18;
    $suma = $numero1 + $numero2;
    $resta = 25 - $numero2;
    $opuesto = -$numero1;
    $multiplicacion = $numero1 * 3;
    $division = $numero2 / 3;
    $modulo = $numero1 % 4;
    $potencia = $numero1 ** 2;

    echo "$numero1 y $numero2";
    echo "$suma $resta $opuesto $multiplicacion $division $modulo $potencia". SALTO;

    $numero3 = "35";
    $numero4 = +$numero3;
    echo "El \$numero 4 es $numero4 y su tipo es " . gettype($numero4) . SALTO;

    // No lo hace con float
    $numero5 = PI;
    $numero6 = +$numero5;
    echo "El \$numero6 y su tipo es " . gettype($numero6) . SALTO;
?>
    </body>


    </html>