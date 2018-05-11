<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 4</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        require_once '../../tema3/ejercicio19/validacionFormularios.php';//Incluimos el fichero que contiene la clase de validación.
        include '../conexionDB.php';//Incluimos el fichero que contiene la conexión a la base de datos
        $correcto=true;//Variable para controlar que todo esté correcto.
        $mensajeError;//Variable para almacenar los mensajes de error.
        $cadenaBuscar;//Variable para asignar el valor del campo del formulario o controlarlo cuando esté vacío
        if (isset($_POST['buscar'])){//En el caso de que se haya pulsado el botón de buscar realizaremos la validación del campo
            $mensajeError["errorDescDepartamento"]= validacionFormularios::comprobarAlfaNumerico($_POST['DescDepartamento'], 255, 0, 0);
            foreach ($mensajeError as &$valor){//Recorremos los mensajes de error para que en el caso de que haya alguno, la variable se ponga a false
                if ($valor!=null){
                    $correcto=false;
                }
            }
        }
        try {
        if($correcto){//En el caso de que esté todo correcto:
            $conexion = new PDO(DATOSCONEXION, USER, PASSWORD);//Establecemos la conexión a la base de datos
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Establecemos los atributos para controlar los errores
            $consulta = $conexion->prepare("SELECT * FROM Departamento WHERE DescDepartamento LIKE concat('%',:DescDepartamento,'%')");//Creamos la consulta preparada
            if(!isset($_POST['DescDepartamento'])){//Comprobamos que el campo de búsqueda tiene algún valor
                $cadenaBuscar='';
            }else{
                $cadenaBuscar = $_POST['DescDepartamento'];
            }
            $consulta->bindParam(':DescDepartamento', $cadenaBuscar);//Asignamos el valor de la variable al parámetro para la búsqueda
            $consulta->execute();//Ejecutamos la consulta
        }
        ?>
            <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <br>
                    <div class="form-group">
                        <label for="DescDepartamento" class="control-label col-md-3">Descripcion Departamento:</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="alfabetico" name="DescDepartamento"
                                   placeholder="" <?php if (isset($_POST['DescDepartamento']) && empty($mensajeError['errorDescDepartamento'])) {
                                echo 'value="', $_POST['DescDepartamento'], '"';
                            } ?>>
                            <?php if (isset($mensajeError['errorDescDepartamento'])) {
                                echo '<span style="color:red">' . $mensajeError['errorDescDepartamento'] . '</span>';
                            } ?>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="buscar" class="btn btn-primary" value="Buscar"/>
                        </div>
                    </div>
                </fieldset>
            </form>
        <?php
        if($correcto){//En caso de que no haya errores
            if ($resultado = $consulta->rowCount() == 0) {//Si la consulta no devuelve resultados mostramos un mensaje
                echo "<p>No se han obtenido resultados</p>";
            }else{//En el caso de que haya resultados mostraremos una tabla con los registros obtenidos
                echo "<table class='table'>
            <tr>
                <th>Codigo</th>
                <th>Descripcion</th>
            </tr>";
                while ($departamento = $consulta->fetch(PDO::FETCH_OBJ)){//mientras haya algun resultado se pasa a una variable y se muestra
                    echo '<tr><td>'.$departamento->CodDepartamento.'</td>';//se muestran los valores
                    echo '<td>'.$departamento->DescDepartamento.'</td></tr>';
                }
                echo '</table>';
            }
        }
        }catch (PDOException $e){//En caso que haya alguna excepción mostraremos un mensaje de error
            print $e -> getMessage();
            }finally{//Finalmente cerramos la conexión independientemente de que haya excepciones o no
                unset($conexion);
        }?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>