<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2 style="color: black">Ejercicio 13</h2>
    <div class="row col-md-12 tecnologias ">
    <?php
    //13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.
   $fecha_actual= strtotime(date("d-m-Y H:i:00", time()));//guardamos la fecha de hoy en una variable
    //strtotime  Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
   //time devuelve la fecha Unix actual
   $fecha_comienzo=strtotime(date("10-01-2018 00:00:00", time()));  //variable que contiene el momento desde el que se empieza a contar
   $archivo=fopen("visitas.txt","r");//fopen abre un fichero, recibe el nombre de este y como lo abre r es Apertura para sólo lectura; 
   $contador= fgets($archivo,26);//contador recibe la posicion del puntero fgets Obtiene una línea desde el puntero al fichero.
   
   fclose($archivo);//fclose cierra un fichero abierto
   //si la fecha actual cuando se visita es mayor que la del comienzo se suma uno al contador
   if($fecha_actual > $fecha_comienzo){
       ++$contador;//incrementamos el contador
       $archivo=fopen("visitas.txt","w+");//se vuelve a abrir el archivo en este caso en modo  escritura y lectura
       fwrite($archivo, $contador, 26); //fwrite escribe en el fichero
       //26 lenght Si se da el argumento length, la escritura se detendrá después de que el numero indicado en length bytes hayan sido escritos o se alcance el final de string, lo que suceda primero.
       fclose($archivo);//cerramos el archivo
   }
   //se muestra un mensaje con el numero de visitas
   echo "La pagina se ha visitado ".$contador." veces";
   ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>