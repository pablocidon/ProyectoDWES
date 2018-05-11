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

/*$controladorActual=$controladores["login"];//Establecemos el controlador que va a ser el del inicio de la aplicación.
session_start();
if (!isset($_GET['pagina'])){
    include_once $controladorActual;//Si no se ha cargado ninguna página, cargaremos la de inicio.
}*/
/**
 * Si se ha definido la página, estableceremos el controlador al que sea pasado por la página,
 * de lo contrario cargaremos el del mantenimiento, que es controlador incial.
 */
//$controlador=$controladores['inicio'];
$error="";
session_start();

if(!isset($_SESSION['usuario'])){
    include_once $controladores['login'];
}else{
    if(isset($_GET['pagina'])){
        include_once $controladores[$_GET['pagina']];
    }else{
        include_once $controladores['inicio'];
    }
}
?>