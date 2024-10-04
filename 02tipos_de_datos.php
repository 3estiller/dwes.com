<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tercer script PHP</title>
</head>

<body>
    <h1>Tipos de datos</h1>
    <p>Tipos de datos escalares(1 solo valor)</p>
    <ul>
        <li>Booleanos</li>
        <li>Int</li>
        <li>Float</li>
        <li>String</li>
    </ul>

    <p>Datos compuestos</p>
    <ul>
        <li>Arrays</li>
        <li>Objetos</li>
        <li>Callable</li>
        <li>Iterable</li>
    </ul>
    <p>Tipos especiales</p>
    <ul>
        <li>Resource</li>
        <li>NULL</li>
    </ul>
    
    <h2>Boolean</h2>
    <p>Inicialmente las constantes True y False. Sin embargo, otros tipos de datos
       tienen conversión implícita al tipo booleano</p>
    
    <ul>
        <li>Int: 0 y el -0 es False, cualquier otro True</li>
        <li>Float: 0.0 y -0.0 es False, cualquier otro True</li>
        <li>Array con 0 elementos es False, con elementos es True</li>
        <li>NULL es False, otro distinto de NULL es True</li>
        <li>Una variable no definida es False</li>
    </ul>
<?php
    $valor_booleano = True;
    $edad = 20;
    $mayor_edad = $edad > 18;

    echo "Mayor de edad es booleano?: " . is_bool($mayor_edad);

    $dinero = 10;
    // equivalente a $dinero != 0
    if ($dinero) echo "<br>Soy rico<br>";
    else echo "<br>Estoy arruinado<br>";

    $mi_nombre= "Juan";
    if ($mi_nombre) echo "Me llamo $mi_nombre<br>";
    else echo "No tengo nombre <br>";
?>


<h2>Enteros</h2>
<p>Números enteros en PHP spn de 32 bits (depende de la plataforma). Pueden expresarse en diferentes notaciones.</p>

<?php

    $numero_entero = 1034;
    echo"El número entero es $numero_entero<br>";

    $numero_negativo = -123;
    echo "Un número negativo con - delante: $numero_negativo<br>";

    // Si quiero expresar un número entero en octal
    $numero_octal = 0123;
    echo "El número 0123 en octal es en decimal: $numero_octal<br>";

    // Puedo mostrar un número entero en octal
    echo "El número $numero_octal" . decoct($numero_octal) . "<br>";

    // Número entero en hexadecimal
    $numero_hex = 0x8AE;
    echo "El número 0x8AE en hexa es en decimal: $numero_hex<br>";

    // Mostrar un número expresado en hexadecimal
    echo "El número $numero_hex en hexa es: " . dechex($numero_hex) . "<br>";

    // Un número entero en binario
    $numero_bin = 0b110101101;
    echo "El número 110101101 es en decimal: $numero_bin<br>";

    // Mostrar un número expresado en binario
    echo "El número $numero_binario es en binario: " . decbin($numero_bin) . "<br>";
?>

<h2>En Coma Flotante</h2>
<p>El separador decimal es el punto . y se pueden expresar números muy grandes o muy pequeños mediante la notación científica con base 10</p>

<?php
    $pi = 3.14159;
    echo "El número pi es: " . round($pi,4) ."<br>";

    $inf_int = 7.9e13;
    echo "Información que circula en Internet en un día $inf_int<br>";

    $tamaño_virus = 0.2e-9;
    echo "Un virus tiene un tamaño de $tamaño_virus";
?>

<h2>Cadenas de caracteres</h2>
<p>Un string es una serie de caracteres donde cada carácter equivale a un byte.
    Esto significaque PHP solo admite 256 carácteres y por ello no ofrece soporte 
    nativo a UTF-8. Un literal de tipo string se expresa de 4 formas:
</p>
<ul>
    <li>Comillas Simples</li>
    <li>Comillas dobles</li>
    <li>Heredoc</li>
    <li>Nowdoc</li>
</ul>

<h3>Comillas simples</h3>
<?php
    // Una cadena encerrada entre comillas simples
    // Solo admite el carácter escape \' \\

    echo 'Esto es una cadena sencilla<br>';
    echo 'Puedo poner una cadena
    en varias lineas
    por que la sentencia
    no acaba hasta
    el punto y coma<br>';

    // No se reconocen caracteres de escape excepto ' y el \

    echo 'El mejor pub de la ciudad es 0\'Donell<br>';
    echo 'La raíz del disco duro es C:\<br>';
    echo 'La raíz del disco duro es C:\\>br>';

    // El salto de línea no se expande
    echo 'Esta cadena tiene\nmás de una línea<br>';

    // No interpola variables
    $mi_nombre = 'Manel';
    echo 'Hola, $mi_nombre, ¿cómo estás?<br>';

?>

<h3>Comillas dobles</h3>
<p>La forma habitual de expresar cadenas de carácteres ya que expande los carácteres de escape y las variables</p>

<?php
    $cadena = "Esto es una cadena con comillas dobles";
    echo "Es una cadena un objeto? " . is_object($cadena) . "<br>";
    if (is_object($cadena)) echo "Las cadenas en php son objetos <br>";
    else echo "LAS CADENAS EN PHP NO SON OBJETOS<br>";

    $consecuencias_esc = "\t\tEl símbolo \$ se emplea para las variables\n y si lo quieres en una
    cadena hay que escaparlo con \\. Es mejor usar\" para delimitar las cadenas en lugar de '<br>";
    echo $consecuencias_esc
?>

<h3>Cadenas HEREDOC</h3>
<p>Es una cadena muy larga que comienzan con <<< le sigue un identificador y justo después un salto de línea.
A continuación se escribe la cdena,con los saltos de línea que necesitemos, podemos interpolar variables y poner caracteres de escape.
Para finalizar hay que hacer un salto de línea y volver a poner el identificador</p>

<?php
    $cadena_hd = <<<HD
    Esto es una cadena
    heredoc que respeta los 
    saltos de línea le puedo
    poner variables como $mi_nombre y
    además secuencias de escape. El
    identificador no necesita \$ y tampoco
    usamos \", simplemente la escribimos y 
    acabamos con un salto de línea más el identificador<br>
    HD;
    echo $cadena_hd;
?>

<h3>Cadena NOWDOC</h3>
<p>La cadena nowdoc es como heredoc con comillas simples. No se interpolan variables
    ni se reconocen secuencias de escape más allá de \ y '. No se respetan los saltos de líne</p>

<?php
    $cadena_nd = <<<'ND'
    Esto es una cadena nowdoc
    y el salto de línea no lo respeta,
    no puedo meter variables
    y solo reconoce \\ y \'.<br>
    ND;

    echo $cadena_nd;
?>

<h2>Conversión de tipos de datos</h2>
<p>Hay dos tipos de conversiones: implícitas y explícitas. Las primeras ocurren cuando
    en una expresión hay operandos de diferente tipo. PHP convierte algunos de ellos
    para evaluar la expresión</p>

<?php
    $cadena = "25";
    $numero = 8;
    $booleano = True;
    $resultado = $cadena + $numero + $booleano;
    echo "El resultado es $resultado<br>";
?>

<p>¡¡¡IMPORTANTE!!!. Cuando se hace una conversión implícita solo afecta
    al operando, pero no a la variable. Es decir, la conversión de $cadena a entero
    solamente para evaluar la expresión, pero $cadena sigue siendo un tipo string</p>

<?php
    $flotante = 3.5;
    $resultado = $cadena + $flotante + $numero + $booleano;
    echo $resultado . "<br>";

    $cadena = "25 marranos dan mucho provecho, mejor que 7 lechones";
    $resultado = $numero + $cadena;
    echo "El resultado es $resultado";
    echo "Después de la última conversión<br>";
?>

    <p>Conversiones explícitas se cononocen como casting o moldeo y se hacen
        precediendo la expresión con el tipo de datos a convertir entre paréntesis    </p>
    
<?php
    // Si quiero convertir a un entero -> (int)expresión
    // Si quiero convertir a float -> (float)expresión
    // Si quiero convertir a string -> (string)expresión

    echo "Conversiones a entero <br>";
    $valor_booleano = True;
    $valor_convertido = (int)$valor_booleano;
    echo "El valor convertido a entero es $valor_convertido<br>";
    $valor_float = 3.14159;
    $valor_convertido = (int)$valor_float;
    echo "El valor convertido a entero es $valor_convertido<br>";
    $valor_redondeado = round($valor_float,0);

    $valor_cadena ="123";
    $valor_convertido = (int)$valor_cadena;
    echo "El valor convertido a entero es $valor_convertido<br>";
?>
</body>

</html>