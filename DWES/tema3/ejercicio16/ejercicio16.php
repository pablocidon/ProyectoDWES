<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">EJERCICIO 16</h2>
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
            
            /**
             * Usamos funciones para recorrer el array:
             * function reset(): resetea el puntero interno del array. Devuelve el valor del primer elemento de un array o FALSE si el array está vacío.
             * function key(): devuelve la clave del elemento del array que está apuntando actualmente el puntero interno, 
             *                si donde apunta el puntero no hay nada, la funcion devuelve null
             * function current(): devuelve el valor del elemento del array que está apuntando actualmente el puntero interno, 
             *                si donde apunta el puntero no hay nada, la funcion devuelve false
             * function next(): devuelve el valor del array en el siguiente lugar que está apuntado por el puntero interno o 
             *                  false si no hay más elementos.
             */
            reset ($aDias);
           do{ //Bucle que recorre el array hasta que no haya mas elementos
                echo "<br>Dia: ".key($aDias)." sueldo: ".current($aDias)."<br>"; 
                $acumuladorSueldo+=current($aDias); //acumulador que suma las cantidades de cada dia
            }while (next($aDias)); 
            
            /**
             * funcion que formatea un numero para que se muestre con lo decimales que tu quieras
             * el primer parametro es el numero que queremos formatear
             * el segundo parametro el numero de decimales que queremos
             * el tercero parametro es el separador que utilizaremos para los numero decimales
             * el cuarto parametro es el separador que utilizaremos para los millares
             * a esta funcion se le puden pasar uno dos o cuatro parametros pero no tres.
             */
            $sueldoConDecimales=number_format($acumuladorSueldo, 2, '.', '');
            echo "<br><p>El sueldo total de la semana es ".$sueldoConDecimales." € </p>"; 
            
            printf("<h3>Con printf</h3>El sueldo total de la semana es ".$sueldoConDecimales." € ");
            
            
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>