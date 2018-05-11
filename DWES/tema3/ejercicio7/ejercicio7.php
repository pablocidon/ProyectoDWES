<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 7</h2>
    <div class="row col-md-12 tecnologias ">
    <?php
    //7. Mostrar el nombre del fichero que se está ejecutando.
    echo "El fichero en ejecucion con __FILE__ es basename(__FILE__) ",basename(__FILE__);//Dada una cadena que contiene una ruta a un archivo o directorio, esta función devolverá el último componente de nombre.
    echo "<br>El fichero en ejecucion con PHP_SELF:  basename(\$_SERVER['PHP_SELF'] ", basename($_SERVER['PHP_SELF']);
    ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>
