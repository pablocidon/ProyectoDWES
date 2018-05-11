<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 12</h2>
    <div class="row col-md-12 tecnologias">
        <?php
            echo '<h1>Usando print_r()</h1>';//Mostramos todos los datos que contine cada una de las variables.
            echo '<h2>$GLOBALS</h2>';
            print_r($GLOBALS);
            echo '<h2>$_SERVER</h2>';
            print_r($_SERVER);
            echo '<h2>$_POST</h2>';
            print_r($_POST);
            echo '<h2>$_GET</h2>';
            print_r($_GET);
            echo '<h2>$_SESSION</h2>';
            if(isset($_SESSION)){//Como la sesión no está creada, es necesario comprobar si existe para mostrar el contenido o un mensaje de error
                print_r($_SESSION);
            }else{
                print_r("La sesión no esta definida.");
            }
            echo '<h2>$_COOKIE</h2>';
            print_r($_COOKIE);
            echo '<h2>$_FILES</h2>';
            print_r($_FILES);
            echo '<h2>$_REQUEST</h2>';
            print_r($_REQUEST);
            echo '<h2>$_ENV</h2>';
            print_r($_ENV);

            echo '<h1>Usando for each()</h1>';//Mostramos los contenidos de cada una de las variables recorriendo cada una de ellas con un bucle y mostrando los datos con un formato
            echo '<h2>$GLOBALS</h2>';
            foreach ($GLOBALS as $variable => $valor){//Debido a que esta variable contiene los datos de las demás, es necesario realizar dos recorridos dentro de la misma.
                echo "<b>$variable</b><br/>";
                print_r($valor); echo '<br>';
            }
            echo '<h2>$_SERVER</h2>';
            foreach ($_SERVER as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_POST</h2>';
            foreach ($_POST as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_GET</h2>';
            foreach ($_GET as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_SESSION</h2>';
            if(isset($_SESSION)){//Como la sesión no está creada, es necesario comprobar si existe para mostrar el contenido o un mensaje de error
                foreach ($_SESSION as $variable => $valor){
                    echo "<b>$variable</b> = $valor<br/>";
                }
            }else{
                echo "<b>La sesión no está definida</b>";
            }
            echo '<h2>$_COOKIE</h2>';
            foreach ($_COOKIE as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_FILES</h2>';
            foreach ($_FILES as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_REQUEST</h2>';
            foreach ($_REQUEST as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
            echo '<h2>$_ENV</h2>';
            foreach ($_ENV as $variable => $valor){
                echo "<b>$variable</b> = $valor<br/>";
            }
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>