<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('img/descargar (1).jpg') no-repeat center center fixed #71A4B1;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .resultado {
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.6);
            width: 90%;
            max-width: 600px;
            backdrop-filter: blur(8px);
            text-align: center;
        }

        .resultado h1 {
            color: #E1CBA4;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px #000;
        }

        .resultado h2 {
            color: #E1CBA4;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px #000;
        }

        .perfil-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            margin-bottom: 15px;
        }
    </style>
</head>


<body>

<div class="resultado">
<img src="img/descargar.jpg" alt="Perfil del estudiante" class="perfil-img">
    <?php

if($_SERVER["REQUEST_METHOD"]=="POST") {
    $e=htmlspecialchars($_POST['nombre']);
    $N1=(int)$_POST['nota1'];
    $N2=(int)$_POST['nota2'];
    $N3=(int)$_POST['nota3'];
    $N4=htmlspecialchars($_POST['nota4']);
    $N5=htmlspecialchars($_POST['nota5']);

    //Prom: Sumar las notas y dividirlas entre la cantidad de notas
    $cum= ($N1 + $N2 + $N3 + $N4 + $N5) / 5;

    echo "<center><h1>UNIDADES VALORATIVAS QUE EL ESTUDIANTE PODRA CURSAR</h1></center>";
    echo "<br><br><h2>Nombre del estudiante: ".$e. "<br></h2>";
    echo "<h2>CUM del estudiante " .$e. " es: " .$cum. "</h2>";

    if( $cum < 6.0 ){
        echo "<h2>Las unidades valorativas son: 16</h2>";
        $uv=16;
    } else if($cum >= 6.0 && $cum < 7.0){
       echo "<h2>Las unidades valorativas son: 20 </h2>"; 
       $uv=20;
    } else if($cum >= 7.0 && $cum < 7.5 ){
       echo "<h2>Las unidades valorativas son: 24 </h2>";
       $uv=24;
    } else if($cum >= 7.5){
       echo "<h2>Las unidades valorativas son: 32 </h2>"; 
       $uv=32;
    }

    //UV a materias
    //materia = 5 UV

    /*
    $m=round($uv/5);
    echo "<h2>Materias: " .$m. "</h2>";
    */

    if($uv == 16){
        echo "<h2>Materias: 3 </h2>";
    } else if ($uv == 20){
        echo "<h2>Materias: 4 </h2>";
    } else if ($uv == 24){
        echo "<h2>Materias: 4 </h2>";
    } else if ($uv == 32){
        echo "<h2>Materias: 6 </h2>";
    }  
}
    ?>
    </div>
</body>
</html>