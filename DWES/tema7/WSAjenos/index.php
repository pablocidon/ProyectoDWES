<?php
/**
 * File  index.php
 * @author Pablo Cidón.
 *
 * Fichero que carga los controladores y las vistas de la aplicación
 * Fecha última revisión 16-04-2018
 */

require_once "config/config.php";
require_once "model/Soap.php";
require_once "core/validacionFormularios.php";
$controladorActual=$controladores["soap"];
if (!isset($_GET['pagina'])){
    include_once $controladorActual;
}

if (isset($_GET['pagina'])){
    $controladorActual=$controladores[$_GET['pagina']];
    include_once $controladorActual;
} else{
    $controladorActual=$controladores['soap'];
    include_once $controladorActual;
}
?>