<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 1</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        //se crean variables que contengan la informacion para conectarnos
            $host = "192.168.20.19";//contiene la direccion a la base de datos
            $usuario = "COMUN1"; //contiene el usuario que se conecta a la base de datos
            $password = "paso";//contiene la contrasena para conectarse a la base de datos
            $bd = "COMUN1_DBdepartamentos";//contiene el nombre de la base de datos
            try{//la conexion a la base de datos se introduce en un bloque try-catch
                $conexion = new PDO("mysql:host = $host;dbname = $bd",$usuario,$password);//se crea un objeto PDO con la informacion de las variables
                $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//se establecen atributos a la conexion ATTR_ERRMODE es para el 
                //reporte de errores y ERRMODE_EXCEPTION para el lanzamiento de excepciones
                echo "<b>Version del cliente:</b> ",$conexion->getAttribute(PDO::ATTR_CLIENT_VERSION),"<br>";//getAttribute devuelve un atributo,
                // ATTR_CLIENT_VERSION nos devuelve la version del cliente
                echo "<b>Version del servidor:</b> ",$conexion->getAttribute(PDO::ATTR_SERVER_VERSION);//ATTR_SERVER_VERSION nos devuelve la version del servidor
            }catch (PDOException $e){//se captura la excepcion
                echo $e->getMessage();//se muestra el mensaje de error
                unset($conexion); //unset destruye una variable especificada
            }
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>