<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mesada de Arturito</title>
    <link rel="stylesheet" href="estilo1.css">
    
</head>
<body>
    <h1>Mesada de Arturito</h1>
    <form action="procesar_arturito.php" method="post">
    <img class="img-circular" src="arturito.jpg" alt="Imagen de Arturito" width="200">
    <br><br>
        <label for="mesada">Cantidad semanal en USD:</label>
        <br><br>
        <input type="number" id="mesada" name="mesada" step="0.01" required>
        <br><br>
        <button type="submit">Calcular</button>
    </form>
    
</body>
</html>
