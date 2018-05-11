<?php
/*
 * Autor: Lucía Rodríguez Álvarez
 * Fecha creaccion: 26-03-2018
 * Fecha ultima modificación: 27-03-2018
 * Nombre Fichero: login.php 
 * */
 require_once "../../view/cabeceraEjercicios.php";

    require_once '../../tema3/ejercicio19/validacionFormularios.php';
    require '../conexionDB.php';
    $entradaOk=true; //variable que utilizamos para tratar los errores
    $mensajeError; //variable que almacena los mensajes de error para los campos
    $errorBD; //variable que alamacena un error en caso de que algo este mal en la base de datos
    $login=false; //Variable para comprobar si el login ha ido bien
    if (isset($_POST['enviar'])) { //comprobamos que se ha pulsado enviar 
        $mensajeError["errorUsuario"]= validacionFormularios::comprobarAlfabetico($_POST['usuario'], 10, 1, 1);// comprobamos el campo nombre
        $mensajeError["errorPassword"]= validacionFormularios::comprobarAlfaNumerico($_POST['password'], 255, 4, 1); //comprobamos el campo fecha
        foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
            if ($valor!=null){ //si el mensaje de error NO esta vacio
                $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
            }
        }
    }
    
    if (isset($_POST['enviar']) && $entradaOk==true){
        $usuario = $_POST['usuario']; //rellenamos la variable $usuario con lo que tengamos dentro del campo usuario
        $password = hash('sha256',$_POST['password']);   //rellenamos la variable $password con lo que tengamos dentro del campo password
            $conexion = new PDO(DATOSCONEXION, USER, PASSWORD); //establecemos la conexion
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        try{
            //Consulta que comprueba si el usuario y contraseña estan en la base de datos
            $consulta= "Select * from Usuarios WHERE CodUsuario=:usuario and Password= :password"; 
            $consulta = $conexion->prepare($consulta); //preparamos la consulta
            $consulta->bindParam(':usuario', $usuario); 
            $consulta->bindParam(':password', $password); 
            $consulta->execute(); //ejecutamos la consulta
            if($consulta->rowCount()!=0){
                
                $resultado = $consulta->fetch(PDO::FETCH_OBJ); 
              //  $login=true;
                session_start(); //iniciamos la sesion
                $ultconex=date("Y-m-d  H:i:s",$_SERVER['REQUEST_TIME']); //alamcenamos la hora actual
                $_SESSION['usuario']  = $usuario;
                $consulta2= "Update Usuarios set UltimaConexion = :ultimaConexion, NumeroAccesos=NumeroAccesos+1 where CodUsuario=:codUsuario";
                $consulta2 = $conexion->prepare($consulta2); //preparamos la consulta
                $consulta2->bindParam('ultimaConexion', $ultconex); 
                $consulta2->bindParam('codUsuario', $_SESSION['usuario']);
                $consulta2->execute();//ejecutamos la consulta
                header("Location: programa.php");
            }else{
                header("Location: login.php");
            } 
        } catch (Exception $exception) {
            echo "Error en la Autentificacion";
        }finally{ 
            unset($consulta); 
            unset($conexion); 
        }
    }else{
?>
<div class="container">
    <h2>LOGIN / LOGOFF</h2>
    <div class="row col-md-12 tecnologias">
        
        <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="usuario" class="control-label col-md-2">Usuario</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="usuario"  <?php if(isset($_POST['usuario']) && empty($mensajeError['errorUsuario'])){ echo 'value="',$_POST['usuario'],'"';}?>>
                        <?php //si existe mensaje de error lo mostramos
                        if(isset($mensajeError['errorUsuario'])){echo '<span style="color:red">'.$mensajeError['errorUsuario'].'</span>';} ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="control-label col-md-2">Contraseña</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" id="alfabetico" name="password"  <?php if(isset($_POST['password']) && empty($mensajeError['errorPassword'])){ echo 'value="',$_POST['password'],'"';}?>>
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
        <?php }
        
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>

