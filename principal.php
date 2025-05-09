<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: url('img/descargar (1).jpg') no-repeat center center fixed #3D4A5E;
      background-size: cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 40px;
    }

    h1 {
      color: #E1CBA4;
      margin-bottom: 30px;
      text-shadow: 1px 1px 3px #000;
    }

    form {
      background-color: rgba(255, 255, 255, 0.1); 
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      width: 100%;
      max-width: 600px;
      backdrop-filter: blur(3px); 
    }

    label {
      color: #3D4A5E;
      display: block;
      margin-top: 15px;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background-color: #E1CBA4;
      color: #000000;
      font-size: 14px;
    }

    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background-color: #3D4A5E;
      color:rgb(255, 255, 255);
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #6084A5;
    }

  </style>

</head>

<body>
    
    <h1>INGRESAR NOTAS: </h1>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-6"> <!-- Maximo de divisiones = 12-->
                <form action="validacion.php" method="POST">
              
                <label>Estudiante: </label>
                <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre" required>
                <br>
                <br>
                <label>Materia #1: </label>
                <input type="text" name="materia1" id="materia" required>
                <br>
                <br>
                <label>Nota #1: </label>
                <input type="number" name="nota1" id="nota" min="0" max="10" step="any" required> <!-- min y max sirven para fijar el numero que se desea-->
                <br>
                <br>
                <label>Materia #2: </label>
                <input type="text" name="materia2" id="materia" required>
                <br>
                <br>

                <label>Nota #2: </label>
                <input type="number" name="nota2" id="nota" min="0" max="10" step="any" required>
                <br>
                <br>
                <label>Materia #3: </label>
                <input type="text" name="materia3" id="materia" required>
                <br>
                <br>
                <label>Nota #3: </label>
                <input type="number" name="nota3" id="nota" min="0" max="10" step="any" required>
                <br>
                <br>
                <label>Materia #4: </label>
                <input type="text" name="materia4" id="materia" required>
                <br>
                <br>
                <label>Nota #4: </label>
                <input type="number" name="nota4" id="nota" min="0" max="10" step="any" required>
                <br>
                <br>
                <label>Materia #5: </label>
                <input type="text" name="materia5" id="materia" required>
                <br>
                <br>
                <label>Nota #5: </label>
                <input type="number" name="nota5" id="nota" min="0" max="10" step="any" required>
                <br>
                <br>

                <input type="submit" value="Calcular">

                </form>
            </div>
        </div>
    </div>    
</body>
</html>