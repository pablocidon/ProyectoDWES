
    
     <?php
     
      /** 
     * autor Alejandro Hernandez 
     * fecha creacion: 2018-03-26 
     * fecha ultima modificacion: 2018-03-26
     *Desarrollo de un control de acceso con identificación del usuario basado en la función header()  
     */ 
     
      if($_SERVER['PHP_AUTH_USER'] != 'admin' && $_SERVER['PHP_AUTH_PW'] != 'paso'){
          //comprobamos que el nombre de usuario y la contrasena son correctas
        
        header('WWW-Authenticate: Basic Realm="admin"'); 
        header('HTTP/1.0 401 Unauthorized');
        
        echo "El usuario es incorrecto";
        exit;
          
          
      }else{
       //si el usuario o la contrasena son erroneos o no se hayan tecleado nunca el header aparece con un mensaje de error y se sale
        require_once "../../view/cabeceraEjercicios.php";
        ?>
       <div class="container">
    
    <div class="row col-md-12 tecnologias">
    <h2>Ejercicio 1</h2>
    <?php
       $currentDate = $_SERVER['REQUEST_TIME'];
       $currentDate =date('d/m/Y H:i:s',$currentDate);
          echo "<p>Bienvenido ".$_SERVER["PHP_AUTH_USER"]." la fecha de conexion es: $currentDate.</p>";
          //como esta correcto mostramos los datos
          echo '<h2>$GLOBALS</h2>'; 
            foreach ($GLOBALS as $variable => $valor){
                //Debido a que esta variable contiene los datos de las demás, es necesario realizar dos recorridos dentro de la misma. 
                echo "<b>$variable</b><br/>"; 
                print_r($valor); echo '<br>'; 
            } 
            echo '<h2>$_SERVER</h2>'; 
            foreach ($_SERVER as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
            echo '<h2>$_POST</h2>'; 
            foreach ($_POST as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
            echo '<h2>$_GET</h2>'; 
            foreach ($_GET as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
            echo '<h2>$_SESSION</h2>'; 
            if(isset($_SESSION)){
            //Como la sesión no está creada, es necesario comprobar si existe para mostrar el contenido o un mensaje de error 
                foreach ($_SESSION as $variable => $valor){ 
                    echo "<b>$variable</b> = $valor<br/>"; 
                } 
            }else{ 
                echo "<b>La sesión no está definida</b>"; 
            } 
            echo '<h2>$_COOKIE</h2>'; 
            foreach ($_COOKIE as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
            echo '<h2>$_FILES</h2>'; 
            foreach ($_FILES as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
            echo '<h2>$_REQUEST</h2>'; 
            foreach ($_REQUEST as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
            echo '<h2>$_ENV</h2>'; 
            foreach ($_ENV as $variable => $valor){ 
                echo "<b>$variable</b> = $valor<br/>"; 
            } 
          
      }
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>