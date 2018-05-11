<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 2</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        require "../conexionDB.php";//se usa un archivo externo que contiene los datos de la conexion
        try{
            $conexion = new PDO(DATOSCONEXION, USER, PASSWORD);//se crea la conexion con los datos del archivo externo
            $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //se anaden atributos a la conexion ATTR_ERRMODE para el 
                //reporte de errores y ERRMODE_EXCEPTION para el lanzamiento de excepciones
            $consulta = "Select * from Departamento"; //se crea una variable que contiene la consulta a realizar
            $resultado = $conexion->query($consulta);//se realiza la consulta pasando los resultados que se optengan
            echo '<table class="table">';//se crea una tabla para mostrar los resultados
            echo '<tr><th>Codigo</th><th>Descripción</th></tr>';
            while ($departamento = $resultado->fetch(PDO::FETCH_OBJ)){//mientras haya algun resultado se pasa a una variable y se muestra
                echo '<tr><td>'.$departamento->CodDepartamento.'</td>';//se muestran los valores
                echo '<td>'.$departamento->DescDepartamento.'</td></tr>';
            }
            //rowCount devuelve el número de filas afectadas por la última sentencia SQL
            echo '<tr><td><b>Número de registros</b></td><td>'.$resultado->rowCount().'</td></tr>'; 
            echo '</table>';            
        }catch (PDOException $e){//se captura la excepcion
            echo $e->getMessage();//se muestra un mensaje
        }finally{//tanto si ha sucedido la excepcion como sino se desconecta
            unset($conexion);
        }
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>