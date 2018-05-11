<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 23</h2>
    <div class="row col-md-12 tecnologias">
    <?php
    require_once '../ejercicio19/validacionFormularios.php'; //incluimos la libreria de validacion
    $entradaOk=true; //variable que utilizamos para tratar los errores
    $mensajeError; //variable que almacena los mensajes de error para los campos
    if (isset($_POST['enviar'])){ //si se ha pulsado enviar hacemos el tratamiento de los datos
        $mensajeError["errorNombre"]= validacionFormularios::comprobarAlfabetico($_POST['nombre'], 25, 0, 1);// comprobamos el campo nombre
        $mensajeError["errorEdad"]= validacionFormularios::comprobarEntero($_POST['edad'], 1); //comprobamos el campo edad
        $mensajeError["errorFechaNacimiento"]= validacionFormularios::validarFecha($_POST['nacimiento'], 1); //comprobamos el campo fecha
        $mensajeError["errorCorreo"]= validacionFormularios::validarEmail($_POST['correo'], 50, 10, 1); //comprobamos el campo fecha
        $mensajeError["errorMensaje"]= validacionFormularios::comprobarAlfaNumerico($_POST['mensaje'], 50, 2, 1); //comprobamos el campo fecha
        if(empty($_POST['valoracion'])){
            $mensajeError["errorValoracion"]="Selecciona una opcion";
        }
        if(empty($_POST['redsocial'])){
            $mensajeError["errorRedsocial"]="Selecciona una o mas redes sociales";
        }
        foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
            if ($valor!=null){ //si el mensaje de error NO esta vacio
                $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
            }
        }
    }
    if (isset($_POST['enviar']) && $entradaOk==true){ // si se ha pulsado enviar y todo esta correcto
        $nombre=$_POST['nombre'];
        $edad=$_POST['edad'];
        $nacimiento=$_POST['nacimiento'];
        $correo=$_POST['correo'];
        $mensaje=$_POST['mensaje'];
        $valoracion=$_POST['valoracion'];
        $redsocial=$_POST['redsocial'];

        echo "<p> <b>Nombre:</b> $nombre </p>"; //mostramos los datos por pantallas
        echo "<p> <b>Edad:</b> $edad </p>"; //mostramos los datos por pantallas
        echo "<p> <b>Fecha Nacimiento:</b> $nacimiento </p>"; //mostramos los datos por pantallas
        echo "<p> <b>Correo:</b> $correo </p>"; //mostramos los datos por pantallas
        echo "<p> <b>Correo:</b> $mensaje </p>"; //mostramos los datos por pantallas
        echo "<p> <b>Valoracion:</b> $valoracion </p>";
        echo "Red social: <ul>";
        foreach($redsocial as $valor){
            echo "<li>".$valor."</li>";
        }
        echo "</ul>";

    }else{  //Si hay algun error mostramos el formulario con los mensajes de error
    ?>
        <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="nombre" class="control-label col-md-2">Nombre:</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" <?php if(isset($_POST['nombre']) && empty($mensajeError['errorNombre'])){ echo 'value="',$_POST['nombre'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorNombre'])){echo '<span style="color:red">'.$mensajeError['errorNombre'].'</span>';} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edad" class="control-label col-md-2">Edad:</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="0" <?php if(isset($_POST['edad']) && empty($mensajeError['errorEdad'])){ echo 'value="',$_POST['edad'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorEdad'])){echo '<span style="color:red">'.$mensajeError['errorEdad'].'</span>';} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="nacimiento">Fecha de nacimiento:</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="nacimiento" name="nacimiento" <?php if(isset($_POST['nacimiento']) && empty($mensajeError['errorFechaNacimiento'])){ echo 'value="',$_POST['nacimiento'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorFechaNacimiento'])){echo '<span style="color:red">'.$mensajeError['errorFechaNacimiento'].'</span>';} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="correo">Correo:</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:" <?php if(isset($_POST['correo']) && empty($mensajeError['errorCorreo'])){ echo 'value="',$_POST['correo'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorCorreo'])){echo '<span style="color:red">'.$mensajeError['errorCorreo'].'</span>';} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="mensaje">Mensaje:</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="mensaje" placeholder="Escribe tu mensaje:" name="mensaje"><?php if(isset($_POST['mensaje']) && empty($mensajeError['errorMensaje'])){ echo $_POST['mensaje'];'"';}?></textarea>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorMensaje'])){echo '<span style="color:red">'.$mensajeError['errorMensaje'].'</span>';} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="valoracion">Valoración:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="mucho" <?php if(!isset($_POST['valoracion'])){ echo "checked" ;}?>
                                <?php if(isset($_POST['valoracion']) && $_POST['valoracion']=="mucho" ){ echo "checked";}?>>Mucho
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="poco" <?php if(isset($_POST['valoracion']) && $_POST['valoracion']=="poco" ){ echo "checked";}?>>Poco
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="nada" <?php if(isset($_POST['valoracion']) && $_POST['valoracion']=="nada" ){ echo "checked";}?>>Nada
                        </label>
                        
                    </div>
                     <?php if(isset($mensajeError['errorValoracion'])){echo '<span style="color:red">'.$mensajeError['errorValoracion'].'</span>';} ?>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="redsocial">Redes Sociales:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="twitter" <?php if(isset($_POST['redsocial']) && $_POST['redsocial']=="twitter" ){ echo "checked";}?>>Twitter
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="facebook" <?php if(isset($_POST['redsocial']) && $_POST['redsocial']=="facebook" ){ echo "checked";}?>>Facebook
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="instagram" <?php if(isset($_POST['redsocial']) && $_POST['redsocial']=="instagram" ){ echo "checked";}?>>Instagram
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="ninguno" <?php if(isset($_POST['redsocial'])){ echo "checked" ;}?>>Ninguno
                        </label>
                    </div>
                     <?php if(isset($mensajeError['errorRedsocial'])){echo '<span style="color:red; margin-left:18%;">'.$mensajeError['errorRedsocial'].'</span>';} ?>
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