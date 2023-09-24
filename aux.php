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

function dameresultado(callable $funcion,string $elemento,array $array) {
    $index = $funcion($elemento, $array);
    if ($index !== false && array_key_exists($index, $array)) {
return $array[$index];
    } else {
return "";
        }
}

// TODO: Implementar en string.php y aquí. En la llamada a la función se le debe de pasar un array con todos los elementos.
/**
 * Recibirá un array.
 * El primer elemento del array va a ser la opción del case y los demás elementos serán los adecuados para cada opción.
 * Dependiente de la opción elegida en la llamada a la función, se le pasará un elemento u otro como segundos argumentos.
 */
function eligeopcion(array $arrayelem) {
   switch ($arrayelem[0]) {
    case 'nombreedad':
        #
        break;
    case 'fecha':
        # code...
        break;
    case 'dinero':
        # code...
        break;
    default:
        return 'No has elegido ninguna opción.';
        break;
   }
}
