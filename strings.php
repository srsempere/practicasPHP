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
        $explode = isset($_POST['explode']) ? $_POST['explode'] : "",
        $del_explode = isset($_POST['del_explode']) ? $_POST['del_explode'] : "",
        $op_fprintf = isset($_POST['op_fprintf']) ? $_POST['op_fprintf'] : "",
        $nombre_fprintf = isset($_POST['nombre_fprintf']) ? $_POST['nombre_fprintf'] : "",
        $edad_fprintf = isset($_POST['edad_fprintf']) ? $_POST['edad_fprintf'] : "",
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

    if ($explode !== null && $explode != '') {
        $results = [
            $explode = explode($del_explode, $explode),
        ];
    }

    if ($nombre_fprintf !== null && $nombre_fprintf != '') {
        $file = fopen("resultado.txt", 'w');

        if (!$file) {
            echo "No se pudo abrir el archivo";
            exit;
        }

        $results = [
            $nombre_fprintf = fprintf($file, "Nombre: %s\n",$nombre_fprintf),
            $nombre_fprintf = fprintf($file, "Edad: %d\n",$edad_fprintf),
        ];

        fclose($file);
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

    <!-- FUNCIÓN 8 -->
    <h2>Función explode</h2>
    <cite>Se utiliza para dividir un string por un delimitador. La función devuelve un array de subcadenas, cada una de las cuales es una sección del string de entrada que está separada por el delimitador especificado.</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="explode" value="<?= isset($inputs['explode']) ? $inputs['explode'] : "" ?>">
        <label>Introduce tu delimitador</label>
        <input type="text" name="del_explode" value="<?= isset($inputs['del_explode']) ? $inputs['del_explode'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <p>

        <?php $res_explode = dameresultado('buscaelemento', $explode, $results); ?>
        <?php

        if (is_array($explode)) {

            $cont = 0;

            foreach ($res_explode as $elemento) {
                echo $cont . "- " . $elemento . "<br>";
                $cont += 1;
            }
        } else {
            echo "No entro dentro.";
        }
        ?>
    </p>

    <!-- FUNCIÓN 9 -->
    <h2>Función fprintf</h2>
    <cite>La función fprintf() en PHP se utiliza para escribir datos formateados en un archivo o stream de archivo. Esta función toma como primer argumento un recurso de archivo (obtenido, por ejemplo, mediante fopen()), seguido de una cadena de formato que especifica cómo se deben presentar los datos, y luego los datos a formatear. Los datos formateados se escribirán en el archivo especificado en lugar de imprimirse en la salida estándar. La función es útil para la creación o manipulación de archivos con contenido estructurado o personalizado.</cite>
    <form action="" method="post">
        <br>
        <label>Introduce tu cadena</label>
        <input type="text" name="fprintf" value="<?= isset($inputs['fprintf']) ? $inputs['fprintf'] : "" ?>">
        <label>Introduce el tipo de datos que vas a tratar.</label>
        <br>
        <br>
        <label>Nombre y edad</label>
        <input type="radio" name="op_fprintf" value="nombreedad">
        <label>Fecha</label>
        <input type="radio" name="op_fprintf" value="fecha">
        <label>Dinero</label>
        <input type="radio" name="op_fprintf" value="dinero">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    <br>
    <br>
    <?php
    if (isset($op_fprintf) && $op_fprintf == 'nombreedad') {
        echo eligeopcion($op_fprintf);
    } elseif (isset($op_fprintf) && $op_fprintf == 'fecha') {
        echo eligeopcion($op_fprintf);
    } elseif (isset($op_fprintf) && $op_fprintf == 'dinero') {
        echo eligeopcion($op_fprintf);
    }
    ?>

</body>

</html>
