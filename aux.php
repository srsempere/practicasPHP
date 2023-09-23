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

function dameresultado($funcion, $elemento, $array) {
    $index = $funcion($elemento, $array);
    if ($index !== false && array_key_exists($index, $array)) {
return $array[$index];
    } else {
return "";
        }
}
