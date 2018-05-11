<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <div class="row col-md-12 tecnologias">
        <?php
        echo '<h1>Código ejercicio: </h1>';
        show_source('ejercicio20.php');
        echo '<h1>Código tratamiento: </h1>';
        show_source('tratamiento.php');
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>