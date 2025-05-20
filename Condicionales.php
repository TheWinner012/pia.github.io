<html>
    <head>
        <title>Practica</title>
    </head>
    <body bgcolor="#cdd7aa">
        <img src="logouanl.png" width="150" lenght="150" style="position:absolute;top:0;left:0">
        <img src="logoprepa.jpg" width="150" lenght="150" style="position:absolute;top:0;right:0">
        <center><h1>Universidad Autonoma de Nuevo León</h1>
        <h2>Prepa 20</h2>
        <h4><p>Fundamentos de Programación Web</h4></b>
        <p>Doctora Hilda Patricia Tamez Villalón</p>
        <p>Equipo 2</p>
        <p>Axel Gabriel Aguiar Cavazos</p>
        <p>Aldo Gael Alanis Zuñiga</p>
        <p>Farid Cavazos Robles</p>
        <p>Carlos Alfredo Gutiérrez</p>
        <p>Ian Daniel Sánchez Leal</p>
        </center>

        <marquee>Equipo 2 Ejercicio Estructura if</marquee>
        <?php
            //AGAC Muestra como usamos la estructura condicional if
            $a=8;
            $b= 3;
            if ($a<$b){
                echo "a es menor que b";
            }
            else{
                echo "a NO es menor que b";
            }
        ?>

        <marquee>Equipo 2 Ejercicio Estructura Switch case</marquee>
        <?php
            //AGAC Muestra como usamos la estructura condicional switch
            $posicion="arriba";
            switch($posicion){
                case "arriba": //Bloque 1
                    echo "La variable contiene";
                    echo " el valor arriba";
                    break;
                case "abajo": //Bloque 2
                    echo "La variable contiene";
                    echo " el valor abajo";
                    break;
                default: //Bloque 3
                    echo "La variable contiene otro valor";
                    echo "distinto de arriba y abajo";
            }
        ?>

        <marquee>Equipo 2 Ejercicio Ciclo While</marquee>
        <?php
            //AGAC Muestra como usamos el ciclo while
            $i=0;
            while($i<5)
            {
                print "<p>$i</p>";
                $i++;
            }
        ?>

        <marquee>Equipo 2 Ejercicio Ciclo While 2</marquee>
        <?php
            //AGAC Muestra como usamos el ciclo while
            $i=0;
            while($i<10)
            {
                echo "El valor de i es ",$i,"<br>";
                $i++;
            }
        ?>

        <marquee>Equipo 2 Ejercicio Ciclo Do While</marquee>
            <?php
                //AGAC Muestra como usamos el ciclo do while
                $i=0;
                do
                {
                    print "<p>$i</p>";
                    $i++;
                }while($i<5)
        ?>

        <marquee>Equipo 2 Ejercicio Ciclo Do While 2</marquee>
            <?php
                //AGAC Muestra como usamos el ciclo do while
                $i=0;
                do
                {
                    echo "El valor de i es ",$i,"<br>";
                    $i++;
                }while($i<5)
            ?>

            <marquee>Equipo 2 Ejercicio Ciclo For</marquee>
            <?php
                //AGAC Muestra como se utiliza el ciclo for
                for($i=0;$i<10;$i++)
                {
                    echo "El valor de i es ",$i,"<br>";
                }
            ?>

            <marquee>Equipo 2 Ejercicio Ciclo For Each</marquee>
            <?php
                //AGAC Muestra como se utiliza el ciclo for each
                $matriz = array(0,1,10,100,1000);
                foreach($matriz as $valor){
                    print"<p>$valor</p>";
                }
            ?>
    </body>
</html>