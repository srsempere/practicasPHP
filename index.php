<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h1>Bienvenido</h1>
    <p>A continuación se muestran las distintas categorías con las que puedes trabajar:</p>
    <fieldset>
        <form action="quehacer.php" method="post">
            <legend>Selecciona tu opción:</legend>
            <br>
            <label for="strings"><input type="radio" name="tipo_datos" value="strings">Trabajar con cadenas.</label>
            <br>
            <br>
            <label for="arrays"><input type="radio" name="tipo_datos" value="arrays">Trabajar con arrays.</label>
            <br>
            <br>
            <button type="submit">Vamós allá</button>
        </form>
    </fieldset>
</body>

</html>
