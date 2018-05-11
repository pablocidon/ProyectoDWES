<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 15</h2>
    <div class="row col-md-12 tecnologias">
        <?php
            /**
             *  autor: Lucía Rodríguez Álvarez  
             *  fecha creacion: 2018-03-12
             */
            $acumuladorSueldo=0; //acumulador para el total del sueldo
            //Array encargado de almacenar los dias de la semana y el sueldo de ese dia
            $aDias=array(
                'Lunes'=>64,
                'Martes'=>56,
                'Miercoles'=>64,
                'Jueves'=>56,
                'Viernes'=>48,
                'Sabado'=>0,
                'Domingo'=>0
            );
            foreach ($aDias as $dia=>$sueldo){ //recorremos el array con un bucle
                echo "<br><p>El dia ".$dia." ha cobrado ".$sueldo."</p>"; //mostramos el sueldo de cada dia de la semana
                $acumuladorSueldo+=$sueldo; //sumamos el sueldo de ese dia
            }
            
            echo "<br><p>El sueldo total de la semana es ".$acumuladorSueldo." € </p></br>"; 
           // printf("%.1f",$num); 
            printf("<h3>Con printf</h3>El sueldo total de la semana es "."%.2f",$acumuladorSueldo);echo " €";
            
            
            /**
             *  autor: Lucía Rodríguez Álvarez  
             *  fecha creacion: 2018-03-13
             */
            for($i=0;$i<365;$i++){
                $aDatos[$i]['Leon']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Zamora']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Valladolid']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Salamanca']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Soria']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Segovia']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Palencia']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Burgos']=array("temperatura"=>null,"presion"=>null);
                $aDatos[$i]['Avila']=array("temperatura"=>null,"presion"=>null);
            }
            $aDatos['20']['Leon']['temperatura']="10";
            $aDatos['30']['Leon']['presion']="1000";
            $aDatos['50']['Zamora']['temperatura']="15";
            $aDatos['30']['Leon']['presion']="1000";
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>