<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 18</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        //Declaración e inicialización del array
        $asiento[4][2]="Pepe";
        $asiento[5][7]="Lucia";
        $asiento[2][8]="Juan";
        $asiento[9][1]="Alejandro";
        $asiento[7][9]="Maria";
        $asiento[1][5]="Pablo";
        /**
         * Funciones utilizadas:
         * function key(): indica la clave del elemento en el que se encuentra el puntero.
         * function current(): indica el valor de la clave en la que se encuentra el puntero.
         * function reset(): situa el puntero al principio del array.
         * function next(): recorre el array mientras continue habiendo elementos.
         */
        echo '<h3>Usando do-while:</h3>';
        do{
            echo "En la fila ".key($asiento)." y butaca ".key(current($asiento))." se encuentra ".current(current($asiento))."<br>";
        }while (next($asiento));
        echo '<h3>Usando while:</h3>';
        reset($asiento);
        while (next($asiento)){
            printf("En la fila ".key($asiento)." y butaca ".key(current($asiento))." se encuentra ".current(current($asiento))."<br>");
        }
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>
