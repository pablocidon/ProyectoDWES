<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 2</h2>
    <div class="row col-md-12 tecnologias">
        <?php
            $variable = <<<EOD
                Ejemplo de variable creada con heredoc
                y que se encuentra 
                en diferentes líneas.
EOD;
            ?>
        <div class="col-md-2">
            <?php print $variable; ?>
        </div>
        <div class="col-md-2">
            <?php print_r($variable); ?>
        </div>
        <div class="col-md-2">
            <?php printf($variable); ?>
        </div>
        <div class="col-md-2">
            <?php echo $variable; ?>
        </div>
        <div class="col-md-2">
            <?php sprintf("pepe %s pepe",$variable); ?>
        </div>
        <div class="col-md-2">
            <?php var_dump($variable); ?>
        </div>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>