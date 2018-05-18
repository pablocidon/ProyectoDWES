<?php
/*
    * Autor: Lucía.
    * Creado: 08-05-2018.
    * Archivo: cMantenimientoUsuarios.php
    * Modificado: 09-05-2018.
*/
if (isset($_POST['volver'])){
    if(isset($_GET['paginaAnterior'])){
        header("Location: index.php?pagina=".$_GET['paginaAnterior']);
    }else{
        header("Location: index.php");
    }
}else{
    $resultados = Opinion::listarOpinionesUsuarios();
    $cantidadCuestiones = Cuestion::cuentaOpinionesCuestiones();
    $_GET["pagina"]="estadisticas";
    require_once 'vista/layout.php';
}



?>
