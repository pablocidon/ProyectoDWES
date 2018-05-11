<?php
require_once "../../view/cabeceraEjercicios.php";
?>
    <div class="container">
        <h2>Ejercicio 7</h2>
        <div class="row col-md-12 tecnologias">
            <?php
            /*Pablo Cidon
        Creado: 23-03-2018.
        Archivo: ejercicio7.php
            */
            require_once '../../tema3/ejercicio19/validacionFormularios.php'; //incluimos la libreria de validacion
            include '../conexionDB.php'; //fichero con la configuracion para acceder a la base de datos
            $numRegistros=0;
            try{
                $miDB = new PDO(DATOSCONEXION, USER, PASSWORD);//Establecemos la conexión a la base de datos
                $miDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Establecemos el control de excepciones
                $miDB->beginTransaction();
            }catch (PDOException $exception){//En caso de que falle la conexión:
                echo "Error: ".$exception->getMessage().'<br>';//Mensaje de error.
                echo "Codigo de error ".$exception->getCode().'<br>';//Codigo de error.
            }
            $error=false;//Declaramos la variable que cambiará de valor cuando haya un error.
            if (filter_has_var(INPUT_POST, 'Importar')) {//Realizar en caso de que se pulse en importar
                $xml_file = $_FILES['fichero']['tmp_name'];//Aparece el cuadro para seleccionar el documento
                if (file_exists($xml_file)) {//En caso de que exista el xml
                    $xml = simplexml_load_file($xml_file);//Carga el archivo xml
                } else {//Por el contrario
                    $error = true;//Se establece que hay error.
                    unset($miDB);//Se cierra la conexión a la base de datos.
                }
            }
            if (!filter_has_var(INPUT_POST, 'Importar') || $error) {//Si no ha pulsado importar o hay algún error
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <label for="Fichero">Seleccione un fichero XML:</label><br/>
                    <input type="file" class="form-control-file" id="fichero" name="fichero" accept="text/xml">
                    <br/><br/>
                    <input type="submit" name="Importar" value="Importar" class="btn btn-default">
                </form>
                <?php
            }else{//Si no hay errores
                $numRegistros = 0;//Establecemos un contador de registros
                $correcto = true;//Variable que cambiará el valor si algo falla
                $CodDepartamento = "";//Almacena el código del departamento
                $DescDepartamento = "";//Almacena la descripción del departamento
                $consulta = "INSERT INTO Departamento (CodDepartamento,DescDepartamento) VALUES (:CodDepartamento,:DescDepartamento)";//Establecemos la consulta que se va a ejecutar
                $sentencia = $miDB->prepare($consulta);//Ejecutamos la consult
                //Parámetros de la consulta que van a recibir los datos
                $sentencia->bindParam(":CodDepartamento", $CodDepartamento);
                $sentencia->bindParam(":DescDepartamento", $DescDepartamento);
                //Recorremos la consulta almacenando los datos en sus respectivas etiquetas
                foreach ($xml->Departamento as $departamento) {
                    $numRegistros++;//Contamos los registros
                    $CodDepartamento = $departamento->CodDepartamento;
                    $DescDepartamento = $departamento->DescDepartamento;
                    try {
                        $sentencia->execute();//Ejecutamos la consulta.
                        echo ("Se ha llevado a cabo la inserción".'<br>');
                    } catch (PDOException $PdoE) {//Error que va saltar
                        echo("El $numRegistros º registro ha fallado<br />");
                    }
                }
                $miDB->commit();//Almacena los datos que han sido correctos
            }
            ?>
        </div>
    </div>
<?php
require_once "../../view/pie.php";
?>