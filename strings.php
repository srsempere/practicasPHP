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
        $str_addcslashes = isset($_POST['str_addcslashes']) ? $_POST['str_addcslashes'] : null,
    ];

    if ($str_addcslashes !== null) {
        $results = [
            $str_addcslashes = addcslashes($str_addcslashes, 'AEIOUaeiou'),
        ];
    }



    ?>
    <h1>Bienvenido a la sección <strong>Cadenas</strong>!</h1>
    <p> Aquí encontrarás implementaciones de todas las funciones de manejo de cadenas de caracteres disponibles en la documentación oficial de PHP. Desde operaciones básicas como concatenar y dividir cadenas, hasta funciones más avanzadas para comparar, buscar y reemplazar subcadenas.</p>

    <h2>Función addcslashes</h2>
    <cite>Pone un slash delante de las letras AEIOUaeiou</cite>
    <p>
    <form action="" method="post">
        <label for="">Introduce tu cadena</label>
        <input type="text" name="str_addcslashes" value="<?= isset($inputs['str_addcslashes']) ? $inputs['str_addcslashes'] : "" ?>">
        <button type="submit">Crear</button>
        <button type="submit" name="borrar">Borrar</button>
    </form>
    Resultado: <?php
                    $index = buscaelemento($str_addcslashes, $results);
                    if ($index !== false && array_key_exists($index, $results)) {
                        ?>
                       <?= $results[buscaelemento($str_addcslashes, $results)]; ?>
                    <?php
                    } else{
                    ?>
                        <?= "" ?>
                    <?php
                    };
                    ?>
    </p>
</body>

</html>
