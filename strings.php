<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>

<body>
    <?php

    require 'aux.php';
    $inputs = [];
    $results = [];

    //FUNCIÓN addcslashes

    //Verificar si se ha pulsado el botón borrar.

    if (isset($_POST['borrar'])) {
        foreach ($results as $key => $value) {
            $results[$key] = '';
        }
    }

    // Definición de variables


    $inputs = [
        $addcslashes = isset($_POST['addcslashes']) ? $_POST['addcslashes'] : "",
        $bin2hex = isset($_POST['bin2hex']) ? $_POST['bin2hex'] : "",
        $chop = isset($_POST['chop']) ? $_POST['chop'] : "",
        $chr = isset($_POST['chr']) ? $_POST['chr'] : "",
        $chunk_split = isset($_POST['chunk_split']) ? $_POST['chunk_split'] : "",
        $trozos_cplit = isset($_POST['trozos_cplit']) ? $_POST['trozos_cplit'] : "",
        $sep_trozos_cplit = isset($_POST['sep_trozos_cplit']) ? $_POST['sep_trozos_cplit'] : "",
        $count_chars = isset($_POST['count_chars']) ? $_POST['count_chars'] : "",
        $crypt = isset($_POST['crypt']) ? $_POST['crypt'] : "",
    ];

    // APLICACIÓN DE FUNCIONES

    if ($addcslashes !== null && $addcslashes != '') {
        $results = [
            $addcslashes = addcslashes($addcslashes, 'AEIOUaeiou'),
        ];
    }

    if ($bin2hex !== null && $bin2hex != '') {
        $results = [
            $bin2hex = bin2hex($bin2hex),
        ];
    }

    if ($chop !== null && $chop != '') {
        $results = [
            $chop = chop($chop),
        ];
    }

    if ($chr !== null && $chr != '') {
        $results = [
            $chr = chr($chr),
        ];
    }

    if ($chunk_split !== null && $chunk_split != '') {
        $results = [
            $chunk_split = chunk_split($chunk_split, $trozos_cplit, $sep_trozos_cplit),
        ];
    }

    if ($count_chars !== null && $count_chars != '') {
        $results = [
            $count_chars = count_chars($count_chars, 3),
        ];
    }


    if ($crypt !== null && $crypt != '') {
        $salt = uniqid();
        $results = [
            $crypt = crypt($crypt, $salt),
        ];
    }

    ?>
    <h1>Bienvenido a la sección <strong>Cadenas</strong>!</h1>
    <p> Aquí encontrarás implementaciones de todas las funciones de manejo de cadenas de caracteres disponibles en la documentación oficial de PHP. Desde operaciones básicas como concatenar y dividir cadenas, hasta funciones más avanzadas para comparar, buscar y reemplazar subcadenas.</p>


    <!-- FUNCIÓN 1 -->

    <h2>Función addcslashes</h2>
    <cite>Pone un slash delante de las letras AEIOUaeiou</cite>
    <form action="" method="post">
        <label>Introduce tu cadena</label>
        <input type="text" name="addcslashes" value="<?= isset($inputs['addcslashes']) ? $inputs['addcslashes'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $addcslashes, $results) ?>

    </p>
    <!-- FUNCIÓN 2 -->

    <h2>Función bin2hex</h2>
    <cite>Devuelve una cadena ASCII que contiene la representación hexadecimal de str. La conversión se realiza byte a byte, con los 4 bits superiores primero.</cite>

    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="bin2hex" value="<?= isset($inputs['bin2hex']) ? $inputs['bin2hex'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $bin2hex, $results) ?>
    </p>

    <!-- FUNCIÓN 3 -->

    <h2>Función chop</h2>
    <cite>La función chop()en PHP elimina espacios en blanco (u otros caracteres especificados) del final de una cadena. Es un alias de la función rtrim().</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="chop" value="<?= isset($inputs['chop']) ? $inputs['chop'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $chop, $results) ?>
    </p>

    <!-- FUNCIÓN 4 -->
    <h2>Función chr</h2>
    <cite>Devuelve una cadena de un caracter que contiene el carácter especificado por ascii</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="chr" value="<?= isset($inputs['chr']) ? $inputs['chr'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $chr, $results) ?>
    </p>

    <!-- FUNCIÓN 5 -->
    <h2>Función chunk_split</h2>
    <cite>Divide una cadena en trozos más pequeños</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="chunk_split" value="<?= isset($inputs['chunk_split']) ? $inputs['chunk_split'] : "" ?>">
        <label>Introduce el número de trozos</label>
        <input type="text" name="trozos_cplit" value="<?= isset($inputs['trozos_cplit']) ? $inputs['trozos_cplit'] : "" ?>">
        <label>Introduce el separador para los trozos</label>
        <input type="text" name="sep_trozos_cplit" value="<?= isset($inputs['sep_trozos_cplit']) ? $inputs['sep_trozos_cplit'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $chunk_split, $results) ?>
    </p>

    <!-- FUNCIÓN 6 -->
    <h2>Función count_chars</h2>
    <cite>Se utiliza para obtener información sobre los caracteres utilizados en una cadena</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="count_chars" value="<?= isset($inputs['count_chars']) ? $inputs['count_chars'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $count_chars, $results) ?>
    </p>

    <!-- FUNCIÓN 7 -->
    <h2>Función crypt</h2>
    <cite>crypt() devolverá el hash de un string utilizando el algoritmo estándar basado en DES de Unix o algoritmos alternativos que puedan estar disponibles en el sistema.</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="crypt" value="<?= isset($inputs['crypt']) ? $inputs['crypt'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>
        Resultado:
        <?= dameresultado('buscaelemento', $crypt, $results) ?>
    </p>
</body>

</html>
