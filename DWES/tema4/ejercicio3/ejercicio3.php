<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 3 - Alta De Departamento</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        require_once '../../tema3/ejercicio19/validacionFormularios.php'; //incluimos la libreria de validacion
        include '../conexionDB.php'; //fichero con la configuracion para acceder a la base de datos
        $entradaOk=true; //variable que utilizamos para tratar los errores
        $mensajeError; //variable que almacena los mensajes de error para los campos
               

        
        if (isset($_POST['enviar'])){ //si se ha pulsado enviar hacemos el tratamiento de los datos
            $mensajeError["errorCodDepartamento"]= validacionFormularios::comprobarAlfabetico($_POST['CodDepartamento'], 3, 3, 1);// comprobamos el campo nombre
            $mensajeError["errorDescDepartamento"]= validacionFormularios::comprobarAlfaNumerico($_POST['DescDepartamento'], 255, 4, 1); //comprobamos el campo fecha
            foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
                if ($valor!=null){ //si el mensaje de error NO esta vacio
                    $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
                }
            }
        }
        if (isset($_POST['enviar']) && $entradaOk==true){ // si se ha pulsado enviar y todo esta correcto
            try{ //intentamos acceder y realizar la consulta a la base de datos
                $conexion = new PDO(DATOSCONEXION, USER, PASSWORD); //establecemos la conexion
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $consulta = $conexion->prepare("INSERT INTO Departamento (CodDepartamento, DescDepartamento) values (:CodDepartamento,:DescDepartamento)");   //creamos y preparamos la consulta
                //asignmos valores a los parametros pasados por la consulta anteriormente
                $consulta->bindParam(':CodDepartamento', $_POST['CodDepartamento']); 
                $consulta->bindParam(':DescDepartamento', $_POST['DescDepartamento']);
                $consulta->execute(); //ejecutamos la consulta
            if ($consulta) { 
                echo "<script>alert('Registro añadido con exito');</script>"; //si se ha añadido mostrmamos un mensaje
            } 
             //cerramos la conexion a la base de datos
            } catch (PDOException $exception) { //capturamos la excepcion en caso de que haya habido algun error
                echo $exception->getMessage(); //Mostramos el mensaje de error por pantalla
                 //cerramos la conexion
            } finally {
            unset($conexion);
            }
        }else{  //Si hay algun error mostramos el formulario con los mensajes de error
            ?>
            <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <br>
                    <div class="form-group">
                        <label for="CodDepartamento" class="control-label col-md-2">Codigo Departamento:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="alfabetico" name="CodDepartamento" placeholder="" <?php if(isset($_POST['CodDepartamento']) && empty($mensajeError['errorCodDepartamento'])){ echo 'value="',$_POST['CodDepartamento'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorCodDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCodDepartamento'].'</span>';} ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DescDepartamento" class="control-label col-md-2">Descripcion Departamento:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="alfabetico" name="DescDepartamento" placeholder="" <?php if(isset($_POST['DescDepartamento']) && empty($mensajeError['errorDescDepartamento'])){ echo 'value="',$_POST['DescDepartamento'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorDescDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorDescDepartamento'].'</span>';} ?>
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col-md-2 col-md-offset-2">
                            <input type="submit" name="enviar" class="btn btn-primary" value="Enviar"/>
                        </div>
                    </div>
                </fieldset>
            </form>
        <?php }?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>