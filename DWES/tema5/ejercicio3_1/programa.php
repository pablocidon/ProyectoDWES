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
   
    if(isset($_POST['salir'])){                                                                                                            //comprobamos si existe el boton salir
        unset($_SESSION['usuario']);  //si existe cerramos sesion
        header("Location: login.php"); //y volvemos login.php
    }

 /*   $idioma=$_POST['idioma'];
    setcookie('idioma',$idioma);*/
  //  $_COOKIE['nombreCookie'];
     
        
    
    require '../conexionDB.php';
    
require_once "../../view/cabeceraEjercicios.php";
?>

<div class="container">
    <h2>Ejercicio 1</h2>
    <div class="row col-md-12 tecnologias">
        
        
        <?php echo "<p> Usuario: ".$_SESSION['usuario'];?>
       
        <form action="<?PHP echo $_SERVER['PHP_SELF'];?>" method="post" name="programa" >
            <div class="form-group">
                <label for="idioma">Idioma</label>
                <select class="form-control" id="idioma" style="width: 10%;" name="idioma">
                    <option value="spain" selected>Español</option>
                    <option value="ingles">Ingles</option>
                    <option value="aleman">Aleman</option>
                </select>
            </div> 
            
            <input type="submit" name="salir" class="btn btn-primary" value="Salir"/>
        </form> 
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>



