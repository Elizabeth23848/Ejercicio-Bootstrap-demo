<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de mesada de arturito</title>
    <link rel="stylesheet" href="estilo1.css">
</head>
<body>

<h1>Mesada de Arturito</h1>

<div class="resultado">
<img class="img-circular" src="arturito.jpg" alt="Imagen de Arturito" width="200">
<h2>Resultados:</h2>

<?php

/* Actualmente Arturito, recibe semanalmente una mesada de X cantidad, en dólares para suplir sus gastos
semanales en el instituto, diariamente él decide gastar la misma cantidad, para que le alcance el dinero
durante toda la semana, y además se ha propuesto ahorra el 15% de todo lo que recibe. 

Arturito usted durante el mes ha recibido un total de $$$$, diariamente ha gastado $$$$$ y usted ha ahorrado
mensualmente la cantidad de $$$$$, de seguir así al final del año usted tendrá $$$$$.

pagina para paleta de color de imagenes

https://colorpalette.imageonline.co/es/
*/

$mesada = $_POST['mesada'];
$mes_total = $mesada * 4; // 4 semanas por mes
$gasto_diario = $mesada / 7;
$ahorro_mensual = $mes_total * 0.15;
$ahorro_anual = $ahorro_mensual * 12;
    
printf(
    "Arturito usted durante el mes ha recibido un total de <span class='resaltar'>%.2f USD</span>, <br><br>
    Diariamente ha gastado <span class='resaltar'>%.2f USD</span>, <br><br>
    Y usted ha ahorrado mensualmente la cantidad de <span class='resaltar'>%.2f USD</span>. <br><br>
    De seguir así, al final del año usted tendrá <span class='resaltar'>%.2f USD</span>. <br><br>",

    $mes_total, 
    $gasto_diario, 
    $ahorro_mensual, 
    $ahorro_anual,
);

?>

</div>

</body>
</html>