<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Hipotenusa</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Calculadora de Hipotenusa</h1>
    <img src="hipotenusa.png" alt="Imagen de Hipotenusa" width="200">
    <form action="procesar_hipotenusa.php" method="post">
        <label for="cateto1">Cateto 1:</label>
        <input type="number" id="cateto1" name="cateto1" step="0.01" ><br><br>
 
        <label for="cateto2">Cateto 2:</label>
        <input type="number" id="cateto2" name="cateto2" step="0.01" ><br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>