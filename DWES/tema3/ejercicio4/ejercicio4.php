<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 4</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        date_default_timezone_set('Europe/Lisbon'); //Establecemos la zona horaria de Lisboa, para la hora de Portugal.
        $numero_mes = date("m");
        $numero_dia_semana = date("N");
        switch($numero_mes){
            case 1: $mes = "janeiro";
                break;
            case 2: $mes = "fevereiro";
                break;
            case 3: $mes = "março";
                break;
            case 4: $mes = "abril";
                break;
            case 5: $mes = "maio";
                break;
            case 6: $mes = "junho";
                break;
            case 7: $mes = "julho";
                break;
            case 8: $mes = "agosto";
                break;
            case 9: $mes = "setembro";
                break;
            case 10: $mes = "outubro";
                break;
            case 11: $mes = "novembro";
                break;
            case 12: $mes = "dezembro";
                break;
        } //Según el número de mes devulve el nombre del mismo.
        switch($numero_dia_semana){
            case 1: $dia_semana = "Segunda-feira";
                break;
            case 2: $dia_semana = "Terça-Feira";
                break;
            case 3: $dia_semana = "Quarta-Feira";
                break;
            case 4: $dia_semana = "Quinta-Feira";
                break;
            case 5: $dia_semana = "Sexta-Feira";
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
        <h4>Las mismas fechas mostradas en portugues:</h4>
        <?php
        setlocale(LC_ALL, 'pt_BR.UTF-8');//Establece un valor local al castellano.
        echo strftime("%A %d de %B del %Y");//No funciona
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>