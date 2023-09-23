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

</body>

</html>
