<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container"> 
    <h2>Ejercicio 25</h2> 
    <div class="row col-md-12 tecnologias"> 
    <?php 
    require_once '../ejercicio19/validacionFormularios.php'; //incluimos la libreria de validacion 
    $entradaOk=true; //variable que utilizamos para tratar los errores 
    $mensajeError; //variable que almacena los mensajes de error para los campos 
    if (isset($_POST['enviar'])){ //si se ha pulsado enviar hacemos el tratamiento de los datos 
        $mensajeError["errorFecha"]= validacionFormularios::validarFecha($_POST['fecha'], 1);//comprobamos la fecha
        $mensajeError["errorTemperatura"]= validacionFormularios::comprobarFloat($_POST['temperatura'], 1);//comprobamos la temperatura
        $mensajeError["errorPresion"]= validacionFormularios::comprobarFloat($_POST['presion'], 1);//comprobamos la presion
        
        
        foreach ($mensajeError as &$valor){ //recorremos los mensajes de error 
            if ($valor!=null){ //si el mensaje de error NO esta vacio 
                $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores 
            } 
        } 
    } 
    if (isset($_POST['enviar']) && $entradaOk==true){ // si se ha pulsado enviar y todo esta correcto 
        $fecha=$_POST['fecha']; 
        $temperatura=$_POST['temperatura'];
        $presion=$_POST['presion'];
        
        
        echo "<p> <b>Fecha:</b> $fecha </p>"; //mostramos los datos por pantallas 
        echo "<p> <b>Temperatura:</b> $temperatura </p>"; //mostramos los datos por pantallas 
        echo "<p> <b>Presion:</b> $presion </p>"; //mostramos los datos por pantallas 
    }else{  //Si hay algun error mostramos el formulario con los mensajes de error 
    ?> 
        <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post"> 
            <fieldset> 
                <br> 
                <div class="form-group"> 
                    <label for="fecha" class="control-label col-md-2">Fecha:</label> 
                    <div class="col-md-10"> 
                        <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha:" <?php if(isset($_POST['fecha']) && empty($mensajeError['errorFecha'])){ echo 'value="',$_POST['fecha'],'"';}?>> 
                        <?php //si existe mensaje de error lo mostramos 
                        if(isset($mensajeError['errorFecha'])){echo $mensajeError['errorFecha'];} ?> 
                    </div> 
                </div> 
                
                <div class="form-group"> 
                    <label for="temperatura" class="control-label col-md-2">Temperatura:</label> 
                    <div class="col-md-10"> 
                        <input type="text" class="form-control" id="temperatura" name="temperatura" placeholder="Temperatura:" <?php if(isset($_POST['temperatura']) && empty($mensajeError['errorTemperatura'])){ echo 'value="',$_POST['temperatura'],'"';}?>> 
                        <?php //si existe mensaje de error lo mostramos 
                        if(isset($mensajeError['errorTemperatura'])){echo $mensajeError['errorTemperatura'];} ?> 
                    </div> 
                </div> 
                
                <div class="form-group"> 
                    <label for="presion" class="control-label col-md-2">Presion:</label> 
                    <div class="col-md-10"> 
                        <input type="text" class="form-control" id="presion" name="presion" placeholder="Presion:" <?php if(isset($_POST['presion']) && empty($mensajeError['errorPresion'])){ echo 'value="',$_POST['presion'],'"';}?>> 
                        <?php //si existe mensaje de error lo mostramos 
                        if(isset($mensajeError['errorPresion'])){echo $mensajeError['errorPresion'];} ?> 
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
