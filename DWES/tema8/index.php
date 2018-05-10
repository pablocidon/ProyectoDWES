<?php
/**
 * File  index.php
 * @author Pablo Cidón.
 *
 * Fichero que carga los controladores y las vistas de la aplicación
 * Fecha última revisión 16-04-2018
 */

require_once "config/conexionDB.php";
require_once "config/config.php";
require_once "modelo/Usuario.php";
require_once "modelo/Departamento.php";
require_once "core/validacionFormularios.php";

$controladorActual=$controladores["login"];//Establecemos el controlador que va a ser el del inicio de la aplicación.

/**
 * Si se ha definido la página, estableceremos el controlador al que sea pasado por la página,
 * de lo contrario cargaremos el del mantenimiento, que es controlador incial.
 */
//$controlador=$controladores['inicio'];
$error="";
session_start();
/**
 * En el caso de que no haya sesión, comprobaremos si está definida la página, y que página vamos a abrir para
 * realizar excepciones, ya que hay páginas que no necesitan una sesión.
 */
if(!isset($_SESSION['usuario'])){//Comprobamos que está la sesión
     if(!isset($_GET['pagina'])){//Comprobamos que hay página
         include_once $controladores['login'];//Si no hay sesión ni página, cargaremos el login
     } else if($_GET['pagina']=='registrar'){
         include_once $controladores['registrar'];//Cargamos la página de inicio, que no requiere de sesión
     }else if($_GET['pagina']=='tecnologias'){
         include_once $controladores['tecnologias'];//Cargamos la página de tecnologías, que no requiere de sesión
     }else if($_GET['pagina']=='wip'){
         include_once $controladores['wip'];//Cargamos la página de wip, que no requiere de sesión
     }
}else{
    /**
     * Si hay sesión y página, cargaremos el controlador de dicha página,
     * de lo contrario cargaremos el controlador de inicio.
     */
    if(isset($_GET['pagina'])){
        include_once $controladores[$_GET['pagina']];
    }else{
        include_once $controladores['inicio'];
    }
}
?>