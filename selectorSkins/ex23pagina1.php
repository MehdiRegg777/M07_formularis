<!DOCTYPE html>
<html lang="es">
<head>
<?php
    $color = $_GET["color"];
    echo  "<link rel=\"stylesheet\" href=\"$color.css\">";
?>
</head>




<body>
    <h2>Selector de skins</h2>

    <form method="get" action="ex23pagina1.php">

        <label for="skin">Selecciona un element</label><br>
        <select name="color" id="colores">
            <option value="foc">FOC</option>
            <option value="aigua">Aigua</option>
            <option value="terra">Terra</option>
        </select>
        <input type="submit" value="Tramet la consulta" />
    </form>
</body>

</html>