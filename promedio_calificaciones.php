<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Promedio de tres calificaciones</title>
</head>
<body>
    <center><h1>Promedio de 3 calificaciones</h1></center>
    <br>
    <center><h3>Farid Cavazos Robles</h3></center>
    <br>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="matricula">Matricula:</label>
        <input type="number" id="matricula" name="matricula" required>

        <label for="call">Calificacion 1:</label>
        <input type="number" id="call" name="cal1" min="0" max="100" required>

        <label for="cal2">Calificacion 2:</label>
        <input type="number" id="cal2" name="cal2" min="0" max="100"required>

        <label for="cal3">Calificacion 3:</label>
        <input type="number" id="cal3" name="cal3" min="0" max="100"required>

        <input type="submit" value="Enviar Mensaje">

        <?php
        function promediotres($cal1,$cal2,$cal3)
        {
            $promedio = ($cal1+$cal2+$cal3)/3;
            return $promedio;
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $matricula = $_POST['matricula'];
            $cal1 = $_POST['cal1'];
            $cal2 = $_POST['cal2'];
            $cal3 = $_POST['cal3'];
            $promedio= promediotres($cal1,$cal2,$cal3);
        }

        //validacion

        if (isset($errores)){
            foreach ($errores as $error){
                echo "<li> $error </li>";
            }
        }

        if(empty($_POST["nombre"])){
            $errores[] = "El nombre es requerido";
        }
        //
        if(empty($_POST["matricula"])){
            $errores[] = "La matricula es requerida";
        }
        //
        if(empty($_POST["cal1"])){
            $errores[] = "La calificacion es requerida";
        }
        //
        if(empty($_POST["cal2"])){
            $errores[] = "La calificacion es requerida";
        }
        //
        if(empty($_POST["cal3"])){
            $errores[] = "La calificacion es requerida";
        }

        if(empty($errores)){
            $nombre = ($_POST["nombre"]);
            $matricula = ($_POST["matricula"]);
            $cal1 = ($_POST["cal1"]);
            $cal2 = ($_POST["cal2"]);
            $cal3 = ($_POST["cal3"]);

            echo "Nombre: $nombre<br>";
            echo "Matrícula: $matricula<br>";
            echo "Calificación 1: $cal1<br>";
            echo "Calificación 2: $cal2<br>";
            echo "Calificación 3: $cal3<br>";
            echo "El promedio es: $promedio";
            if ($promedio>=70){
                echo "<br>";
                echo "El alumno aprobo la materia";
            }
            if($promedio<70){
                echo "<br>";
                echo "El alumno NO APROBO la materia";
            }
        }

        
        






        ?>
</body>
</html>