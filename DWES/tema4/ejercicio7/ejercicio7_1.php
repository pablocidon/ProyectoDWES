<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 7</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        /*Lucía Rodríguez Álvarez
    Creado: 21-03-2018.
    Archivo: ejercicio7.php
        */
         require_once '../../tema3/ejercicio19/validacionFormularios.php'; //incluimos la libreria de validacion
         include '../conexionDB.php'; //fichero con la configuracion para acceder a la base de datos
         $numRegistros=0;
         $regmal=0;
         try { 
            $consultaOk=true; //variable que utilizamos para tratar los errores
            $xml=simplexml_load_file("ejercicio7.xml"); //variable que almacena el archivo xml que vamos a utilizar

            if ($xml === false) { //si el fichero no existe mostramos un mensaje de error
                echo "<h2>"; 
                echo "Error cargando XML\n"; 
                foreach(libxml_get_errors() as $error) { 
                    echo "\t", $error->message; 
                } 
            echo "</h2>"; 
        }else{ 
            $conexion = new PDO(DATOSCONEXION, USER, PASSWORD); //establecemos la conexion
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->beginTransaction();//iniciar transaccion

            //preparación de la consulta 
            $consulta= $conexion->prepare("INSERT INTO Departamento VALUES (:CodDepartamento,:DescDepartamento)"); 
            $consulta->bindParam(':CodDepartamento',$CodDepartamento); 
            $consulta->bindParam(':DescDepartamento',$DescDepartamento); 
            //rellenado de datos de la consulta 
            foreach ($xml->departamento as $departamento) { // recorremos el array 
                    $numRegistros++;
                    $CodDepartamento=$departamento->CodDepartamento; 
                    $DescDepartamento=$departamento->DescDepartamento; 
                
                     try {
                        $consulta->execute();
                      //  echo "El registro $numRegistros se ha insetado correctamente <br>";
                    } catch (PDOException $exception) {
                        $regmal++;
                    //Si la ejecucion de uno de los registros falla, mostramos por pantalla cual ha fallado
                        //echo("ha habido algun error en el registro $numRegistros<br />");
                    }
                    
                }
                
                if($regmal==0){
                    echo "Se realizado un total de $numRegistros registros";
                }else if($regmal!=0){
                    echo "Se han realizado un total de $numRegistros de los cuales han fallado ".$regmal; 
                }

                $conexion->commit();
                
        } 

        }catch (PDOException $exception) {  
             echo $exception->getMessage();  
             unset($conexion);  
         }  



?> 
        
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>