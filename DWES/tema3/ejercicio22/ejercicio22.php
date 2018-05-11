<?php
require_once "../../view/cabeceraEjercicios.php";

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

        echo "<p> Nombre: $nombre </p>"; //mostramos los datos por pantallas
        echo "<p> Edad: $edad </p>"; //mostramos los datos por pantallas
        echo "<p> Fecha Nacimiento: $nacimiento </p>"; //mostramos los datos por pantallas
        echo "<p> Correo: $correo </p>"; //mostramos los datos por pantallas
        echo "<p> Correo: $mensaje </p>"; //mostramos los datos por pantallas
        echo "<p> Valoracion: $valoracion </p>";
        echo "Red social: <ul>";
        foreach($redsocial as $valor){
            echo "<li>".$valor."</li>";
        }
        echo "</ul>";
        }else{  //Si hay algun error mostramos el formulario con los mensajes de error
?>
<div class="container">
    <h2>Ejercicio 22</h2>
    <div class="row col-md-12 tecnologias">
        <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="nombre" class="control-label col-md-2">Nombre:</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:">
                        <?php if(isset($mensajeError['errorNombre'])){echo $mensajeError['errorNombre'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edad" class="control-label col-md-2">Edad:</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="0">
                        <?php if(isset($mensajeError['errorEdad'])){echo $mensajeError['errorEdad'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="nacimiento">Fecha de nacimiento:</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="nacimiento" name="nacimiento">
                        <?php if(isset($mensajeError['errorNacimiento'])){echo $mensajeError['errorNacimiento'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="correo">Correo:</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:">
                        <?php if(isset($mensajeError['errorEmail'])){echo $mensajeError['errorEmail'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="mensaje">Mensaje:</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribe tu mensaje:"></textarea>
                        <?php if(isset($mensajeError['errorMensaje'])){echo $mensajeError['errorMensaje'];} ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="valoracion">Valoración:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="mucho">Mucho
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="poco">Poco
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="nada">Nada
                        </label> 
                    </div>
                   <?php if(isset($mensajeError['errorValoracion'])){echo $mensajeError['errorValoracion'];} ?>

                    
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="redsocial">Redes Sociales:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="twitter">Twitter
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="facebook">Facebook
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="instagram">Instagram
                        </label>
                    </div>
                    <?php if(isset($mensajeError['errorRedsocial'])){echo $mensajeError['errorRedsocial'];} ?>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        <button class="btn btn-primary" name="enviar">Enviar</button>
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