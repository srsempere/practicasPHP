<?php

$tipo_datos_elegido = isset($_POST['tipo_datos']) ? $_POST['tipo_datos'] : "";

var_dump($tipo_datos_elegido);

header('Location: ' . $tipo_datos_elegido . '.php');
