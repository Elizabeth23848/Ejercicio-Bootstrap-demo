<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
$cateto1 = $_POST['cateto1'];
$cateto2 = $_POST['cateto2'];


if (!is_numeric($cateto1) || $cateto2 <= 0 || !is_numeric($cateto2) || $cateto1 <= 0) {
    echo "Los números deben ser un número positivo.<br>";
} else {
    $hipotenusa = sqrt(pow($cateto1, 2) + pow($cateto2, 2)); 
}


 
echo "<h2>Resultados:</h2>";
echo "La hipotenusa es: ".number_format($hipotenusa,2)." unidades.";
?>
</body>
</html>