<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 8</h2>
    <div class="row col-md-12 tecnologias ">
    <?php
        //8. Mostrar la dirección IP del equipo desde el que estás accediendo.
        echo "<h1>Datos del servidor y del cliente</h1>";
        echo "La direccion IP del equipo desde la que se accede es <b>", $_SERVER['REMOTE_ADDR'],"</b>";//$_SERVER['REMOTE_ADDR']; nos da la direccion IP del cliente que esta accediendo
        echo "<br>El nombre del servidor es <b>",$_SERVER['SERVER_NAME'],"</b>"; //muestra el nombre del servidor
        echo "<br>La direccion del servidor es <b>",$_SERVER['SERVER_ADDR'],"</b>"; //muestra la direccion del servidor
        echo "<br>El software del servidor es <b>",$_SERVER['SERVER_SOFTWARE'],"</b>"; //muestra el software usado por el servidor
        echo "<br>El protocolo del servidor es <b>",$_SERVER['SERVER_PROTOCOL'],"</b>"; //muestra el protocolo del servidor
        echo "<br>El puerto del servidor es <b>",$_SERVER['SERVER_PORT'],"</b>"; //muestra el puerto del servidor
        
        //echo "<br> del servidor es ",$_SERVER[''];
    ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>
