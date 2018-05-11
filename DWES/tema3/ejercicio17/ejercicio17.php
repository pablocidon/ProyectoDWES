<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 17</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        $asiento[4][2]="Pepe";
        $asiento[5][7]="Lucia";
        $asiento[2][8]="Juan";
        $asiento[9][1]="Alejandro";
        $asiento[7][9]="Maria";
        $asiento[1][5]="Pablo";

        echo "<h2>Usando for:</h2>";
        for ($fila = 0;$fila < 20;$fila++){
            for($columna = 0;$columna < 15;$columna++){
                if (!empty($asiento[$fila][$columna])){
                    echo "Fila: ".$fila." Columna: ".$columna." Nombre: ".$asiento[$fila][$columna]."<br>";
                }
            }
        }
        echo "<h2>Usando foreach:</h2>";
        foreach($asiento as $plaza => $fila){
            foreach($fila as $butaca => $asistente){
                print("En la fila ".$plaza. " y butaca ".$butaca. " se encuentra ".$asistente);
                print "</br>";
            }
        }

        echo '<h2>Ejercicio Examen</h2>';

        for($i = 0; $i< 365;$i++){
            $datos[$i]['Avila']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Burgos']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Leon']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Palencia']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Salamanca']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Segovia']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Soria']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Valladolid']= array('Temperatura'=>null,'Presion'=>null);
            $datos[$i]['Zamora']= array('Temperatura'=>null,'Presion'=>null);
        }
        $datos[32]['Avila']['Temperatura']=14;
        $datos[32]['Avila']['Presion']=1013;
        $datos[32]['Burgos']['Temperatura']=15;
        $datos[32]['Burgos']['Presion']=1047;
        $datos[32]['Leon']['Temperatura']=15;
        $datos[32]['Leon']['Presion']=1024;
        $datos[32]['Palencia']['Temperatura']=12;
        $datos[32]['Palencia']['Presion']=1013;
        $datos[32]['Salamanca']['Temperatura']=18;
        $datos[32]['Salamanca']['Presion']=1020;
        $datos[32]['Segovia']['Temperatura']=16;
        $datos[32]['Segovia']['Presion']=1036;
        $datos[32]['Soria']['Temperatura']=12;
        $datos[32]['Soria']['Presion']=1013;
        $datos[32]['Valladolid']['Temperatura']=20;
        $datos[32]['Valladolid']['Presion']=1025;
        $datos[32]['Zamora']['Temperatura']=19;
        $datos[32]['Zamora']['Presion']=1050;

        for ($dia=0;$dia<365;$dia++){
            if(!empty($datos[$dia]['Avila']['Temperatura'])){print "La temperatura en Ávila el dia ".$dia." es ".$datos[$dia]['Avila']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Burgos']['Temperatura'])){print "<br> La temperatura en Burgos el dia ".$dia." es ".$datos[$dia]['Burgos']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Leon']['Temperatura'])){print "<br> La temperatura en Leon el dia ".$dia." es ".$datos[$dia]['Leon']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Palencia']['Temperatura'])){print "<br> La temperatura en Palencia el dia ".$dia." es ".$datos[$dia]['Palencia']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Salamanca']['Temperatura'])){print "<br> La temperatura en Salamanca el dia ".$dia." es ".$datos[$dia]['Salamanca']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Segovia']['Temperatura'])){print "<br> La temperatura en Segovia el dia ".$dia." es ".$datos[$dia]['Segovia']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Soria']['Temperatura'])){print "<br> La temperatura en Soria el dia ".$dia." es ".$datos[$dia]['Soria']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Valladolid']['Temperatura'])){print "<br> La temperatura en Valladolid el dia ".$dia." es ".$datos[$dia]['Valladolid']['Temperatura']."ºC";}
            if(!empty($datos[$dia]['Zamora']['Temperatura'])){print "<br> La temperatura en Zamora el dia ".$dia." es ".$datos[$dia]['Zamora']['Temperatura']."ºC";}
        }

        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>