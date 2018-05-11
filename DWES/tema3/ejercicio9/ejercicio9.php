<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 9</h2>
    <div class="row col-md-12 tecnologias ">
    <?php
        //9. Mostrar el path donde se encuentra el fichero que se está ejecutando
        echo "El path del fichero que se esta ejecutando actualmente es <b>", __FILE__,"</b>"; //__FILE__ nos da la ruta completa y el nombre del fichero 
    ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>