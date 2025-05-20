<html>
    <head>
        <title>Promedio de 3 Calificaciones</title>
    </head>
    <body>
                <p>Equipo 2 Grupo:407</p><br>
        <h2>Promedio de 3 Calificaciones</h2>
        
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre:
            <input type="text" id="nombre" name="nombre" required><br>
            Matricula:
            <input type="text"  id="matricula" name="matricula" required><br>
            Calificacion 1:
            <input type="number" id="cal1" name="cal1" min="0" max="100" required><br>
            Calificacion 2:
            <input type="number" id="cal2" name="cal2" min="0" max="100" required><br>
            Calificacion 3:
            <input type="number" id="cal3" name="cal3" min="0" max="100" equired><br>
            <input type="submit" name="submit" value="Calcular">
        </form>
        <center>
        <?php
            //FCR Se crea una función llamada promediotres que lo que hace es calcular el promedio de 3 calificaciones
            function promediotres($cal1,$cal2,$cal3){
                $promedio=($cal1+$cal2+$cal3)/3;
                return $promedio;
            }

            //FCR hace una validacion para que los datos esten completos
            if(isset($_POST["submit"])&& $_SERVER["REQUEST_METHOD"]== "POST")
        {
            $errores=[];
            //FCR el nombre y matricula son campos obligatorios
            if(empty($_POST["nombre"])){
                $errores[]="El nombre es requerido para avanzar";
            }
            if(empty($_POST["matricula"])){
                $errores[]="La matricula es requerida para avanzar";
            }

            //FCR Las calificaciones son campos obligatorios para poder avanzar
            if(empty($_POST["cal1"])){
                $errores[]="La Calificación 1 es requerida para avanzar";
            }
            if(empty($_POST["cal2"])){
                $errores[]="La Calificación es requerida para avanzar";
            }
            if(empty($_POST["cal3"])){
                $errores[]="La Calificación 3 es requerida para avanzar";
            }

            if(empty($errores)){
            //FCR Se guardan los datos que recibimos del cliente en variables para poder trabajar con ellas
                $nombre=$_POST["nombre"];  
                $matricula=$_POST["matricula"];
                $c1=$_POST["cal1"];
                $c2=$_POST["cal2"];
                $c3=$_POST["cal3"];
                $promedio= promediotres($c1,$c2,$c3);

                echo 'Resultados','<br>';
                echo "El nombre del estudiante es: $nombre";
                echo '<br>';
                echo "La matricula del estudiante es: $matricula";
                echo '<br>';
                echo "La calificación 1 es: $c1";
                echo '<br>';
                echo "La calificación 2 es: $c2";
                echo '<br>';
                echo "La calificación 3 es: $c3";
                echo '<br>';
                echo "El promedio de las calificaciones es: $promedio";
                if($promedio>=70){
                    echo '<br>';
                    echo "El alumno aprobó la materia";
                }
                if($promedio<70){
                    echo '<br>';
                    echo "El alumno NO APROBÓ la materia";
                }

            } else {
                // FCR Muestra los errores
                foreach ($errores as $error) {
                    echo "<p style='color:red;'>$error</p>";
                }
            }
        }         
        ?>
        <br><br>
        </center>
        
        <style>
/* Fondo general */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    margin: 0;
    padding: 0;
}

/* Contenedor centrado */
form {
    background-color: white;
    max-width: 400px;
    margin: 50px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* Título */
h2 {
    text-align: center;
    color: #4a90e2;
}

/* Etiquetas e inputs */
form input[type="text"],
form input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0 16px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Botón de enviar */
form input[type="submit"] {
    background-color: #4a90e2;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

form input[type="submit"]:hover {
    background-color: #357ab8;
}

/* Errores */
p {
    text-align: center;
    font-weight: bold;
}

/* Resultados */
body > p,
body > br {
    text-align: center;
}

        </style>
    </body>
</html>