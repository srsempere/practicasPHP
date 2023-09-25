<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Redirigir a otra página después de 3 segundos usando la etiqueta meta-->
    <!-- <meta http-equiv="refresh" content="3;url=strings.php"> -->
    <title>Operación exitosa</title>
</head>
<body>
    <center>
        <h1>Operación realizada con éxito.</h1>
        <p>Los datos se han guardado correctamente en resultados.txt.</p>
        <p><i>Serás redirigido a la página principal en unos segundos...</i></p>
    </center>
    <?php
        header("Refresh: 5; url=strings.php", true, 302);
        exit();
    ?>
</body>
</html>
