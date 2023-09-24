<?php

// Función que usa el botón borrar.
function borrar($var)
{
    return $var = '';
}

// Función buscar

/**
 * Devuelve la posición del elemento si lo encuentra y en caso contrario, devuelve false.
 */
function buscaelemento($elem, $array)
{
    return array_search($elem, $array);
}


// Función resultado

/**
 * Busca un elemento dentro del array resultado y lo devuelve.
 */

function dameresultado(callable $funcion, $elemento, $array): array | string {
    $index = $funcion($elemento, $array);
    if ($index !== false && array_key_exists($index, $array)) {
return $array[$index];
    } else {
return "";
        }
}

function eligeopcion( $op_fprintf) {
   switch ($op_fprintf) {
    case 'nombreedad':
        return
            <<<EOT
            <form action="" method="post">
                <label>Introduce el nombre:</label>
                <input type="text" name="nombre_fprintf">
                <label>Introduce la edad:</label>
                <input type="text" name="edad_fprintf">
                <button type="submit">Enviar</button>
            </form>
            EOT;
    case 'fecha':
            return
            <<<EOT
            <form action="" method="post">
                <label>Introduce el año:</label>
                <input type="text" name="anyo_fprintf">
                <label>Introduce el mes:</label>
                <input type="text" name="mes_fprintf">
                <label>Introduce el dia:</label>
                <input type="text" name="dia_fprintf">
                <button type="submit">Enviar</button>
            </form>
            EOT;
        break;
    case 'dinero':
        return
        <<<EOT
        <form action="" method="post">
            <label>Introduce la cantidad monetaria:</label>
            <input type="text" name="dinero_fprintf">
        </form>
        EOT;
   }
}
