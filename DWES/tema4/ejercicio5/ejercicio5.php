<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 5 - Transaccion</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        include '../conexionDB.php'; //fichero con la configuracion para acceder a la base de datos
        $consulta1Ok; //inicializamos la variable que utilizaremos para comprobar que se ha hecho bien
        $consulta2Ok;
        $consulta3Ok;
        try{
            $conexion = new PDO(DATOSCONEXION, USER, PASSWORD); //establecemos la conexion
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->beginTransaction();//iniciar transaccion

            //creamos las consultas  y las ejecutamos
            $consulta1 = "INSERT INTO Departamento (CodDepartamento,DescDepartamento) VALUES ('PRD', 'AAAA')"; 
            $consulta1Ok = $conexion->exec($consulta1);

            $consulta2 = "INSERT INTO Departamento (CodDepartamento,DescDepartamento) VALUES ('PRB', 'BBBB')"; 
            $consulta2Ok = $conexion->exec($consulta2);

            $consulta3 = "INSERT INTO Departamento (CodDepartamento,DescDepartamento) VALUES ('PRC', 'CCCCC')"; 
            $consulta3Ok = $conexion->exec($consulta3);
            
            //comprobamos si ha habido algun error en las consultas
            if($consulta1Ok == 1 && $consulta2Ok == 1 && $consulta3Ok == 1){ //si no ha habido ningun error
                $conexion->commit(); //hacemos el commit y se realizara la transaccion
                echo "correcto";

            }else{ //si ha habido algun error
                $conexion->rollback(); //hacemos el rollback que revertira la transaccion
                echo "error";
            }

        } catch (PDOException $exception) { //capturamos la excepcion en caso de que haya habido algun error
                echo $exception->getMessage(); //Mostramos el mensaje de error por pantalla
                 //cerramos la conexion
        } finally { 
        unset($conexion);  //cerramos la conexion a la base de datos
        }

        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>