<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 4</h2>
    <div class="row col-md-12 tecnologias ">
    <?php
    //6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
    /**
     * autor Lucía Rodríguez Álvarez
     * fecha creacion: 2018-03-09
     * fecha ultima modificacion: 2018-03-12
     */
    date_default_timezone_set('Europe/Madrid'); //Establecemos la zona horaria
    $fechaHoy=date('Y-m-d'); //Variable que almacena la fecha de hoy
    echo "<h5>FECHA HOY</h5>Fecha de hoy: ".$fechaHoy."<br>"; //Mostramos la fecha de hoy
    $fecha=strtotime($fechaHoy."+60 days"); //Variable que le suma 60 dias a la fecha actual
    echo "<h2>CON STRTOTIME</h2>Fecha dentro de 60 dias: ".date("Y-m-d",$fecha); //Mostramos la fecha dentro de dias por pantalla

    //con mktime
    echo "<br><h2>CON MKTIME</h2>La fecha dentro de 60 dias sera ".date('Y-m-d', mktime(0, 0, 0, date("m"), date("d")+60, date("Y")));
  
    $fecha2 = date_create($fechaHoy);
    date_add($fecha2, date_interval_create_from_date_string('60 days'));
    echo "<br><h2>CON DateTime::add()</h2>La fecha dentro de 60 dias sera ".date_format($fecha2, 'Y-m-d');
    ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>
