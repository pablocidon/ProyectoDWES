<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 1</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        //Declaración e inicialización de las variables
        $nombre = 'Pablo'; //Tipo String.
        $edad = 20; //Variable numérica integer
        $nota = 4.95; //Variable numérica float
        $boolean = true; //Variable boolean
        $nula = null;
        ?>
        <div class="col-md-3">
            <?php
                echo "<h3>ECHO</h3>";
                echo "<p>Cadena ",$nombre,"<br/> Entero ",$edad,"<br/> Float ",$nota,"<br/> Boolean ",$boolean,"</p>"; //Mostrar el contenido de las variables usando 'echo'.
            ?>
        </div>
        <div class="col-md-3">
            <?php
            echo "<h3>PRINT</h3>";
            print ("<p>Cadena $nombre <br/> Entero $edad<br/> Float $nota<br/> Boolean $boolean</p>" ); //Mostrar el contenido de las variables usando 'print'.
            ?>
        </div>
        <div class="col-md-3">
            <?php
            echo "<h3>PRINTF</h3>";
            printf ("<p>Cadena $nombre <br/> Entero $edad<br/> Float $nota<br/> Boolean $boolean</p>" ); //Mostrar el contenido de las variables usando 'printf'.
            ?>
        </div>
        <div class="col-md-3">
            <?php
            echo "<h3>PRINT_R</h3>";
            print_r ("<p>Cadena $nombre <br/> Entero $edad<br/> Float $nota<br/> Boolean $boolean</p>" ); //Mostrar el contenido de las variables usando 'print_r'.
            ?>
        </div>
        <?php
            echo "<h3>Tipo y valor</h3>";//Mostramos el tipo de variable que es con gettype, y el valor que contiene.
            echo '<p>La variable $nombre es del tipo ',gettype($nombre),' y tiene el valor ',$nombre,'</p>';
            echo '<p>La variable $edad es del tipo ',gettype($edad),' y tiene el valor ',$edad,'</p>';
            echo '<p>La variable $nota es del tipo ',gettype($nota),' y tiene el valor ',$nota,'</p>';
            echo '<p>La variable $boolean es del tipo ',gettype($boolean),' y tiene el valor ',$boolean,'</p>';
            print(nl2br("cadena con \n salto de linea")); //Mostramos una cadena con salto de línea
            echo "<h3>VAR_DUMP</h3>";//Mostramos el tipo de variable que es con gettype, y el valor que contiene.
            var_dump($nombre,$edad,$nota,$boolean);
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>