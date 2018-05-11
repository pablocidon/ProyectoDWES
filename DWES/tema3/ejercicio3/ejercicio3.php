<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 3</h2>
    <div class="row col-md-12 tecnologias">
        <h4>La fecha actual, en distintos formatos es:</h4>
        <?php
        date_default_timezone_set('Europe/Madrid'); //Establecemos la zona horaria de Madrid, para la hora de España.
        $numero_mes = date("m");
        $numero_dia_semana = date("N");
        switch($numero_mes){
        case 1: $mes = "Enero";
        break;
        case 2: $mes = "Febrero";
        break;
        case 3: $mes = "Marzo";
        break;
        case 4: $mes = "Abril";
        break;
        case 5: $mes = "Mayo";
        break;
        case 6: $mes = "Junio";
        break;
        case 7: $mes = "Julio";
        break;
        case 8: $mes = "Agosto";
        break;
        case 9: $mes = "Septiembre";
        break;
        case 10: $mes = "Octubre";
        break;
        case 11: $mes = "Noviembre";
        break;
        case 12: $mes = "Diciembre";
        break;
        } //Según el número de mes devulve el nombre del mismo.
        switch($numero_dia_semana){
        case 1: $dia_semana = "Lunes";
        break;
        case 2: $dia_semana = "Martes";
        break;
        case 3: $dia_semana = "Miércoles";
        break;
        case 4: $dia_semana = "Jueves";
        break;
        case 5: $dia_semana = "Viernes";
        break;
        case 6: $dia_semana = "Sábado";
        break;
        case 7: $dia_semana = "Domingo";
        break;
        }//Según el número de día devulve el nombre del mismo.
        print $dia_semana.", ".date("j")." de ".$mes." de ".date("Y")." ".date("g:i:s");
        //Devuelve la fecha formateada como Dia de la semana, dia, mes y año.
        echo "<br>";
        $fecha = date("d-m-Y h:i:s");
        echo $fecha; //Devuelve la fecha en tipo numérico
        echo "<br>";
        $fecha = date("D-M-Y g:i:s A");
        echo $fecha; //Devuelve las iniciales del dia de la semana y mes,en inglés, y la hora de 1 a 12 indicando AM o PM
        echo "<br>";
        $fecha = date("l-F-Y g:i:s A");
        echo $fecha; //Devuelve las iniciales del dia de la semana y mes,en inglés, y la hora de 1 a 12 indicando AM o PM
        ?>
        <h4>Las mismas fechas mostradas en español:</h4>
        <?php
        setlocale(LC_ALL, 'es_ES.UTF-8');//Establece un valor local al castellano.
        echo strftime("%A %d de %B del %Y");
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>