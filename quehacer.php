<?php

$tipo_datos_elegido = isset($_GET['tipo_datos']) ? $_GET['tipo_datos'] : "";

var_dump($tipo_datos_elegido);

header('Location: ' . $tipo_datos_elegido . '.php');
