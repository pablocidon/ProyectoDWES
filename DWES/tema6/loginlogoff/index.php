<?php

/*
 * autor: Lucia Rodriguez Alvarez
 * fecha creacion: 2018-04-06
 * fecha ultima modificacion: 
 * nombre fichero: index.php  
 */

//incluimos los ficheros y clases que vamos a usar
include_once 'model/Usuario.php'; 
require_once 'config/conexionDB.php';
require_once 'config/configuracion.php';
require_once 'core/validacionFormularios.php';

//Indicamos que controlador utilizaremos por defecto, en este caso el de inicio

$controlador=$aControladores['inicio'];
$error="";
session_start();

if(isset($_SESSION['usuario']) && !isset($_GET['pagina']) ){
    include_once $controlador;
}  

if(isset($_GET['pagina'])){
    $controlador=$aControladores[$_GET['pagina']];
    include_once $controlador;
}else{
        $controlador=$aControladores['login'];
        include_once $controlador;
}