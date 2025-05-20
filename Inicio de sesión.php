<html>
    <head>
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
    </head>

    <h2>Inicio de Sesión:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nombre:
    <input type="text" name="nombre" maxlength="50"><br>
    Matricula:
    <input type="text" name="matricula" maxlength="7"><br>
    Contraseña:
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Enviar">
   </form>
<?php
   function filtrado($datos){
       $datos = trim($datos); 
       $datos = stripslashes($datos);
       $datos = htmlspecialchars($datos);
       return $datos;
   }

   $errores = [];

   if(isset($_POST["submit"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
       $nombre = filtrado($_POST["nombre"]);
       $matricula = filtrado($_POST["matricula"]);
       $password = filtrado($_POST["password"]);

       if(empty($nombre)){
           $errores[] = "El nombre es requerido";
       }
       if(empty($matricula)){
           $errores[] = "La matrícula es requerida";
       }
       if(empty($password) || strlen($password) < 5){
           $errores[] = "La contraseña es requerida y debe tener más de 5 caracteres";
       }

       if(empty($errores)){
           header("Location: /Menu%20etapas.php");
           exit(); 
       }
   }
?>

<ul>
    <?php if(isset($errores)){
        foreach ($errores as $error){
            echo "<li> $error </li>";
        }
    }
    ?>
</ul>
  </body>
</html>