<?php
/*
 * Autor: Lucía Rodríguez Álvarez
 * Fecha creaccion: 26-03-2018
 * Fecha ultima modificación: 28-03-2018
 * Nombre Fichero: programa.php 
 */
    session_start(); //recupreamos la sesion iniciada
    if (!isset($_SESSION['usuario'])) {  //comprobamos si existe una sesion iniciada
        die("No has iniciado sesion, incia sesion en este enlace <a href='login.php'>login</a>.<br>"); 
    }
    
     if(!empty($_POST['idioma'])){
                $idioma=$_POST['idioma'];
                setcookie('idioma',$idioma);
            }
    
    if(isset($_POST['salir'])){   //comprobamos si existe el boton salir
        unset($_SESSION['usuario']);  //si existe cerramos sesion
        header("Location: login.php"); //y volvemos login.php
    }

        
    
    require '../conexionDB.php';
    
require_once "../../view/cabeceraEjercicios.php";
?>

<div class="container">
    <h2>Ejercicio 1</h2>
    <div class="row col-md-12 tecnologias">
        
        
        <?php echo "<p>Bienvenido ".$_SESSION['usuario']."</p>";?>
        <?php echo "<p> Esta es la ".$_SESSION['NumeroAccesos']." vez que se conecta al sistema, su ultima conexion fue ".$_SESSION['ultimaconexion']."</p>";?>

       
        <form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method="post" name="programa" >
            <div class="form-group">
                <label for="idioma">Idioma</label>
                <select class="form-control" id="idioma" style="width: 20%;" name="idioma">
                    <option value="defecto" >Selecciona una opcion</option>
                    <option value="spain" <?php if(isset($_COOKIE['idioma']) && $_COOKIE['idioma']=="spain"){
                        echo 'selected';
                    }?>>Español</option>
                    <option value="ingles" <?php if(isset($_COOKIE['idioma']) && $_COOKIE['idioma']=="ingles"){
                        echo 'selected';
                    }?>>Ingles</option>
                    <option value="aleman" <?php if(isset($_COOKIE['idioma']) && $_COOKIE['idioma']=="aleman"){
                        echo 'selected';
                    }?>>Aleman</option>
                </select>
            </div> 
            <?php
                 if(isset($_SERVER)){ 
                            foreach($_SERVER as $clave => $valor){//Recorremos la variable $_SERVER 
                                print("<b>$clave</b> => $valor</br>");//Asignamos los valores 
                            } 
                        }else{//En caso de que no esté definida 
                            echo "La variable '\$_SERVER' no está definida"; 
                        } 
                        echo "<h1>'\$_SESSION'</h1>"; 
                        if(isset($_SESSION)){ 
                            foreach($_SESSION as $clave => $valor){//Recorremos la variable $_SESSION 
                                print("<b>$clave</b> => $valor</br>");//Asignamos los valores 
                            } 
                        }else{ 
                            echo "La variable '\$_SESSION' está vacía";//En caso de que no haya sesiones mostraremos que la variable se encuentra vacía. 
                        }
                        
            echo "<h1>'\$_COOKIE'</h1>"; 
            if(!empty($_COOKIE)){     
                    foreach ($_COOKIE as $clave => $valor){ 
                        echo "{$clave} => {$valor}",'<br/> '; 
                    } 
                }else{ 
                    echo '$_COOKIE esta vacio <br/>'; 
                } 
            
            ?>
            
            <input type="submit" name="salir" class="btn btn-primary" value="Salir"/>
        </form> 
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>



