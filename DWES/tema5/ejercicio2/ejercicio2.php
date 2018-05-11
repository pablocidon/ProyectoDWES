<?php
require_once "../../view/cabeceraEjercicios.php";
?>
    <div class="container">
        <h2>Ejercicio 2</h2>
        <div class="row col-md-12 tecnologias">
            <?php
            /*
             * Autor: Pablo Cidon
             * Archivo: ejercicio2.php
             * Fecha: 26-03-2018.
             * Control de acceso mediante una tabla de usuarios en una base de datos
             */
            require "../conexionDB.php";//se usa un archivo externo que contiene los datos de la conexion
            require_once '../core/validacionFormularios.php';//Incluimos el fichero que contiene la clase de validación.
            $correcto = true;
            $usuario = '';//
            $password = '';
            $fecha = '';
            $mensajeError = array(
                'usuario'=>'',
                'password'=>''
            );
            date_default_timezone_set('Europe/Madrid');
            if(isset($_POST['entrar'])){
                $mensajeError['usuario'] = validacionFormularios::comprobarAlfabetico($_POST['usuario'],10,1,1);
                $mensajeError['password'] = validacionFormularios::comprobarAlfaNumerico($_POST['password'],255,4,1);
                foreach ($mensajeError as $valor){
                    if($valor!=null){
                        $correcto = false;
                    }
                }
            }
            if(isset($_POST['entrar']) && $correcto){//En caso de que se haya enviado y sea correcto:
                $password = hash('sha256',$_POST['password']);//Almacenamos la contraseña cifrada en una variable
                try{
                    $conexion = new PDO(DATOSCONEXION, USER, PASSWORD);//Establecemos la conexión a la base de datos
                    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Establecemos los atributos para controlar los errores
                    $consulta = "Select * from Usuarios WHERE CodUsuario = :usuario AND Password = :password";//Consulta de validación para comprobar que el usuario existe
                    $consulta = $conexion->prepare($consulta);//Preparamos la consulta
                    $consulta->bindParam(':usuario', $_POST['usuario']);//Asignamos el valor que van a tener los parámetros de la consulta
                    $consulta->bindParam(':password', $password);
                    $consulta->execute();
                    $resultado = $consulta->fetch(PDO::FETCH_OBJ);
                    if($consulta->rowCount()!=0){//En caso de que la consulta devuelva algún registro:
                        //Sacamos los datos de la consulta y lo cargamos en la sesión
                        $_SESSION['usuario']=$resultado->CodUsuario;//Guardamos el usuario que ha accedido
                        $_SESSION['password']=$resultado->Password;//Guardamos la contraseña del usuario que ha sido encriptada
                        $_SESSION['perfil']=$resultado->Perfil;//Guardamos el tipo de perfil que tiene el usuario
                        $_SESSION['conexionAnterior']= $resultado->UltimaConexion;//Guardamos la fecha de la conexión anterior para mostrarla
                        $_SESSION['contadorAccesos']=$resultado->NumeroAccesos;//Guardamos el número de accesos para mostrarlso
                        $fecha = new DateTime($_SESSION['conexionAnterior']);
                        echo "<h3>Bienvenido ".$_SESSION['usuario'].", su última conexión ha sido ".$fecha->format('d-m-Y H:i:s').", y ha realizado ".$_SESSION['contadorAccesos']." conexiones.</h3>";//Mostramos un mensaje de binvenida usando los valores de la sesión
                        /*
                         * Recorremos la variable $_SERVER mostrando cada uno de los valores que contiene.
                         */
                        echo "<h1>'\$_SERVER'</h1>";
                        if(isset($_SERVER)){
                            foreach($_SERVER as $clave => $valor){//Recorremos la variable $_SERVER
                                print("<b>$clave</b> => $valor</br>");//Asignamos los valores
                            }
                        }else{//En caso de que no esté definida
                            echo "La variable '\$_SERVER' no está definida";
                        }
                        /*
                         * Mostramos la variable $_SESSION con cada uno de los campos que hemos guardado en la sesión.
                         */
                        echo "<h1>'\$_SESSION'</h1>";
                        if(isset($_SESSION)){
                            foreach($_SESSION as $clave => $valor){//Recorremos la variable $_SESSION
                                print("<b>$clave</b> => $valor</br>");//Asignamos los valores
                            }
                        }else{
                            echo "La variable '\$_SESSION' está vacía";//En caso de que no haya sesiones mostraremos que la variable se encuentra vacía.
                        }

                        $ultconex=date("Y-m-d  H:i:s",$_SERVER['REQUEST_TIME']);//Cargamos la marca de tiempo de $_SERVER para actualizar la fecha de último acceso
                        //Creamos la consulta preparada para realizar la actualización de la fecha y del contador de accesos
                        $consulta2= "Update Usuarios set UltimaConexion = :ultimaConexion, NumeroAccesos=NumeroAccesos+1 where CodUsuario=:codUsuario";
                        $consulta2 = $conexion->prepare($consulta2);
                        $consulta2->bindParam('ultimaConexion', $ultconex);
                        $consulta2->bindParam('codUsuario', $_SESSION['usuario']);
                        $consulta2->execute();
                    }
                }catch (PDOException $exception){
                    print $exception->getMessage();//En caso de que salte una excepción mostraremos el mensaje
                }finally{
                    unset($conexion);//Finalmente cerraremos la conexión
                }
            }else{
                ?>
                <br>
                <form name="formulario" class="form-horizontal" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="usuario" class="control-label col-md-2">Usuario:</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" <?php if(isset($_POST['usuario']) && empty($mensajeError['usuario'])){ echo 'value="',$_POST['usuario'],'"';}?>>
                                <?php //si existe mensaje de error lo mostramos
                                if(isset($mensajeError['usuario'])){echo '<span style="color:red">'.$mensajeError['usuario'].'</span>';} ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2" for="password">Contraseña:</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña:" <?php if(isset($_POST['password']) && empty($mensajeError['password'])){ echo 'value="',$_POST['password'],'"';}?>>
                                <?php //si existe mensaje de error lo mostramos
                                if(isset($mensajeError['password'])){echo '<span style="color:red">'.$mensajeError['password'].'</span>';} ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2 col-md-offset-2">
                                <input type="submit" name="entrar" class="btn btn-primary" value="Entrar"/>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
<?php
require_once "../../view/pie.php";
?>