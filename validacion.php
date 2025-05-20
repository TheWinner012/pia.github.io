<html>
    <h2>Formulario:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nombre:
        <input type="text" name="nombre" maxlength="50"><br>
        Contraseña:
        <input type="password" name="password"><br>
        Educación:
        <select name="educacion">
            <option value="sin-estudios">Sin estudios</option>
            <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
            <option value="formacion-profesional">Formación Profesional</option>
            <option value="universidad">Universidad</option>
            </select> <br>
            Idiomas:
            <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
            <input type="checkbox" name="idiomas[]" value="ingles">Inglés</input>
            <input type="checkbox" name="idiomas[]" value="frances">Francés</input>
            <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>
            Email:
            <input type="text" name="email"><br>
            Sitio Web:
            <input type="text" name="sitioweb"><br>
            <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
        function filtrado($datos){
            $datos=trim($datos); //AGAC Elimina espacios antes y después de los datos
            $datos=stripslashes($datos); //AGAC Elimina backslashes 
            $datos =htmlspecialchars($datos);//AGAC Traduce caracteres especiales en entidades HTML
            return $datos;
        }
        if(isset($_POST["submit"])&& $_SERVER["REQUEST_METHOD"]== "POST")
        {
            //AGAC el nombre y contraseña son campos obligatorios
            if(empty($_POST["nombre"])){
                $errores[]="El nombre es requerido";
            }
            if(empty($_POST["password"])||strlen($_POST["password"])<5)
            {
                $errores[]="La contraseña es requerida y ha de ser mayor a 5 caracteres";
            }
            //AGAC El email es obligatorio y ha de tener formato adecuado
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)|| empty($_POST["email"]))
            {
                $errores[]="No se ha indicado email o el formato no es correcto";
            }
            //AGAC El sitio web es obligatorio y ha de tener formato adecuado
            if(!filter_var($_POST["sitioweb"],FILTER_VALIDATE_URL)||empty($_POST["email"]))
            {
                $errores[]="No se ha indicado sitio web o el formato no es correcto";
            }
            //AGAC Si el array $errores esta vacio, se aceptan los datos y se asignan a variables
            if(empty($errores))
            {
                $nombre=filtrado($_POST["nombre"]);
                $password=filtrado($_POST["password"]);
                $educacion=filtrado($_POST["educacion"]);
                //AGAC Utilizamos implode para pasar el array a string
                $idiomas=filtrado(implode(",",$_POST["idiomas"]));
                $email=filtrado($_POST["email"]);
                $sitioweb=filtrado($_POST["sitioweb"]);
            }
        }
    ?>
    <ul>
        <?php
            if(isset($errores))
            {
                foreach($errores as $error){
                    echo "<li>$error</li>";
                }
            }
        ?>
    </ul>
    <?php if(isset($_POST["submit"])):?>
    <h2>Mostrar datos enviados</h2>
    Nombre: <?php isset($nombre) ? print $nombre : ""; ?><br>
    Contraseña: <?php isset($password) ? print $password : ""; ?><br>
    Educación: <?php isset($educacion) ? print $educacion : ""; ?><br>
    Idiomas: <?php isset($idiomas) ? print $idiomas : ""; ?><br>
    Email: <?php isset($email) ? print $email : ""; ?><br>
    Sitio web: <?php isset($sitioweb) ? print $sitioweb : ""; ?><br>
    <?php endif; ?>
</html>