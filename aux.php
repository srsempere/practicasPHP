<?php

// Función que usa el botón borrar.
function borrar($var)
{
    return $var = '';
}

// Función buscas

/**
 * Devuelve la posición del elemento si lo encuentra y en caso contrario, devuelve false.
 */
function buscaelemento($elem, $array)
{
    return array_search($elem, $array);
}
