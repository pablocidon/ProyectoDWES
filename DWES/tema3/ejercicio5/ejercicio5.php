<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <div class="row col-md-12 tecnologias">
        <?php
        $fecha = new DateTime();//Creacion de la variable de tipo fecha
        /*
         * Mostramos la misma marca de tiempo pero utilizando distintas zonas horarias para observar como la marca de tiempo es la misma en todo el mundo.
         * date_default_timezone_get()-> función que nos devuelve la zona horaria que estamos utilizando.
         * $fecha->getTimestamp()-> función que nos devuelve la marca de tiempo de la fecha que tenemos creada, que es la actual del sistema.
         * date("d-m-Y  H:i:s",$fecha->getTimestamp()-> Nos devuelve una fecha formateada según la marca de tiempo que tenga registrada.
         * Cada vez que cambiamos la zona horaria toma todas las fechas que haya a continuación como si fuesen de la zona horaria establecida.
         */
        echo "En la timezone ".date_default_timezone_get()." la marca de tiempo es ".$fecha->getTimestamp(). " y la fecha y hora ".date("d-m-Y  H:i:s",$fecha->getTimestamp());
        echo "<br><br>";
        date_default_timezone_set('Europe/Lisbon');
        echo "En la timezone ".date_default_timezone_get()." la marca de tiempo es ".$fecha->getTimestamp(). " y la fecha y hora ".date("d-m-Y  H:i:s",$fecha->getTimestamp());
        echo "<br><br>";
        date_default_timezone_set('America/Chihuahua');
        echo "En la timezone ".date_default_timezone_get()." la marca de tiempo es ".$fecha->getTimestamp(). " y la fecha y hora ".date("d-m-Y  H:i:s",$fecha->getTimestamp());
        echo "<br><br>";
        //Otra forma de hacerlo es establecer la zona nueva zona horaria directamente a la fecha, de esta forma solo afectará a esa fecha
        $fecha->setTimezone(new DateTimeZone('Australia/Sydney'));
        print $fecha->format('d-m-Y H:i:s (e)');//Devuelve la fecha con formato y además, la zona horaria a la que pertenece.
        echo "<br><br>";
        $fecha->setTimezone(new DateTimeZone('Asia/Tokyo'));
        print $fecha->format('d-m-Y H:i:s (e)');
        echo "<br><br>";
        $fecha->setTimezone(new DateTimeZone('Antarctica/Vostok'));
        print $fecha->format('d-m-Y H:i:s (e)');
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>