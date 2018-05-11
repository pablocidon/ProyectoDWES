<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 24</h2>
    <div class="row col-md-12 tecnologias">
        <?php
        require_once '../ejercicio19/validacionFormularios.php'; //incluimos la libreria de validacion
        $entradaOk=true; //variable que utilizamos para tratar los errores
        $mensajeError; //variable que almacena los mensajes de error para los campos
        if (isset($_POST['enviar'])){ //si se ha pulsado enviar hacemos el tratamiento de los datos
            $mensajeError["errorAlfabetico"]= validacionFormularios::comprobarAlfabetico($_POST['alfabetico'], 25, 0, 1);// comprobamos el campo nombre
            $mensajeError["errorNumericoEntero"]= validacionFormularios::comprobarEntero($_POST['entero'], 1); //comprobamos el campo edad
            $mensajeError["errorFecha"]= validacionFormularios::validarFecha($_POST['fecha'], 1); //comprobamos el campo fecha
            $mensajeError["errorAlfanumerico"]= validacionFormularios::comprobarAlfaNumerico($_POST['alfanumerico'], 50, 10, 1); //comprobamos el campo fecha
            $mensajeError["errorTexto"]= validacionFormularios::comprobarAlfaNumerico($_POST['texto'], 50, 2, 1); //comprobamos el campo fecha
            //$mensajeError["errorSelect"] = validacionFormularios::comprobarNoVacio($_POST['select']);
            if(empty($_POST['radio'])){
                $mensajeError["errorRadio"]="Selecciona una opcion";
            }
            if(empty($_POST['checkbox'])){
                $mensajeError["errorCheckbox"]="Selecciona una o mas opciones";
            }
            $mensajeError["errorEmail"] = validacionFormularios::validarEmail($_POST['email'],20,5,1);
            $mensajeError['errorPassword'] = validacionFormularios::comprobarAlfaNumerico($_POST['password'],20,5,1);
            foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
                if ($valor!=null){ //si el mensaje de error NO esta vacio
                    $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
                }
            }
        }
        if (isset($_POST['enviar']) && $entradaOk==true){ // si se ha pulsado enviar y todo esta correcto
            $alfabetico=$_POST['alfabetico'];
            $entero=$_POST['entero'];
            $fecha=$_POST['fecha'];
            $alfaNumerico = $_POST['alfanumerico'];
            $texto=$_POST['texto'];
            $radio=$_POST['radio'];
            $checkbox=$_POST['checkbox'];
            $select=$_POST['select'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            echo "<p> <b>Albetico:</b> $alfabetico </p>"; //mostramos los datos por pantallas
            echo "<p> <b>Entero:</b> $entero </p>"; //mostramos los datos por pantallas
            echo "<p> <b>Fecha:</b> $fecha </p>"; //mostramos los datos por pantallas
            echo "<p> <b>Alfanumérico:</b> $alfaNumerico </p>"; //mostramos los datos por pantallas
            echo "<p> <b>Texto:</b> $texto </p>"; //mostramos los datos por pantallas
            echo "<p> <b>Radio:</b> $radio </p>";
            echo "<b>Checkbox: </b><br>";
            foreach($checkbox as $valor){
                echo $valor."<br>";
            }

        }else{  //Si hay algun error mostramos el formulario con los mensajes de error
            ?>
            <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset>
                    <br>
                    <div class="form-group">
                        <label for="alfabetico" class="control-label col-md-2">Campo alfabetico:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="alfabetico" name="alfabetico" placeholder="Campo alfabético" <?php if(isset($_POST['alfabetico']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['alfabetico'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorAlfabetico'])){echo '<span style="color:red">'.$mensajeError['errorAlfabetico'].'</span>';} ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="entero" class="control-label col-md-2">Campo entero:</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" id="entero" name="entero" placeholder="0" <?php if(isset($_POST['entero']) && empty($mensajeError['errorNumericoEntero'])){ echo 'value="',$_POST['entero'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorNumericoEntero'])){echo '<span style="color:red">'.$mensajeError['errorNumericoEntero'].'</span>';} ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="fecha">Campo fecha:</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" id="fecha" name="fecha" <?php if(isset($_POST['fecha']) && empty($mensajeError['errorFecha'])){ echo 'value="',$_POST['fecha'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorFecha'])){echo '<span style="color:red">'.$mensajeError['errorFecha'].'</span>';} ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="alfanumerico">Campo alfanumérico:</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="alfanumerico" name="alfanumerico" placeholder="Campo alfanumérico:" <?php if(isset($_POST['alfanumerico']) && empty($mensajeError['errorAlfanumerico'])){ echo 'value="',$_POST['alfanumerico'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorAlfanumerico'])){echo '<span style="color:red">'.$mensajeError['errorAlfanumerico'].'</span>';} ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="texto">Texto:</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="texto" placeholder="Escribe tu mensaje:" name="texto"><?php if(isset($_POST['texto']) && empty($mensajeError['errorTexto'])){ echo $_POST['texto'];'"';}?></textarea>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorTexto'])){echo '<span style="color:red">'.$mensajeError['errorTexto'].'</span>';} ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="radio">Radio:</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
                                <input type="radio" name="radio" id="radio" value="op1" <?php if(!isset($_POST['radio'])){ echo "checked" ;}?>
                                    <?php if(isset($_POST['radio']) && $_POST['radio']=="op1" ){ echo "checked";}?>>Opción 1
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="radio" id="radio" value="op2" <?php if(isset($_POST['radio']) && $_POST['radio']=="op2" ){ echo "checked";}?>>Opción 2
                            </label>
                            <label class="checkbox-inline">
                                <input type="radio" name="radio" id="radio" value="op3" <?php if(isset($_POST['radio']) && $_POST['radio']=="op3" ){ echo "checked";}?>>Opción 3
                            </label>
                            <?php if(isset($mensajeError['errorRadio'])){echo '<span style="color:red">'.$mensajeError['errorRadio'].'</span>';} ?>
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="checkbox">Checkbox:</label>
                        <div class="col-md-10">
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkbox[]" id="checkbox" value="op1" <?php if(isset($_POST['checkbox']) && $_POST['checkbox']=="op1"){ echo "checked";}?>>Opción 1
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkbox[]" id="checkbox" value="op2" <?php if(isset($_POST['checkbox']) && $_POST['checkbox']=="op2" ){ echo "checked";}?>>Opción 2
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkbox[]" id="checkbox" value="op3" <?php if(isset($_POST['checkbox']) && $_POST['checkbox']=="op3" ){ echo "checked";}?>>Opción 3
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="checkbox[]" id="checkbox" value="op1" <?php if(isset($_POST['checkbox']) && $_POST['checkbox']=="op4" ){ echo "checked";}?>>Opción 4
                            </label>
                            <?php if(isset($mensajeError['errorCheckbox'])){echo '<br><span style="color:red">'.$mensajeError['errorCheckbox'].'</span>';} ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="select">Select Option:</label>
                        <div class="col-md-10">
                            <select class="form-control" id="select" name="select">
                                <option class="heading" selected>Seleccione una opción</option>
                                <option value="op1">Opción 1</option>
                                <option value="op2">Opción 2</option>
                                <option value="op3">Opción 3</option>
                                <option value="op4">Opción 4</option>
                                <option value="op5">Opción 5</option>
                                <option value="op6">Opción 6</option>
                            </select>
                            <?php if(isset($mensajeError['errorSelect'])){echo '<span style="color:red">'.$mensajeError['errorSelect'].'</span>';} ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2" for="email">Campo email:</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Campo email:" <?php if(isset($_POST['email']) && empty($mensajeError['errorEmail'])){ echo 'value="',$_POST['email'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorEmail'])){echo '<span style="color:red">'.$mensajeError['errorEmail'].'</span>';} ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-2" for="password">Campo password:</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Campo password:" <?php if(isset($_POST['password']) && empty($mensajeError['errorPassword'])){ echo 'value="',$_POST['password'],'"';}?>>
                            <?php //si existe mensaje de error lo mostramos
                            if(isset($mensajeError['errorPassword'])){echo '<span style="color:red">'.$mensajeError['errorPassword'].'</span>';} ?>
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