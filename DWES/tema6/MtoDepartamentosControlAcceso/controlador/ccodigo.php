<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 26-01-2018.
    * Archivo: ccodigo.php
    * Modificado: 26-01-2018.
*/
if (isset($_POST['volver'])){
    if(isset($_GET['paginaAnterior'])){
        header("Location: index.php?pagina=".$_GET['paginaAnterior']);
    }else{
        header("Location: index.php");
    }
}else{
    $_GET['pagina']="codigo";
    require_once 'vista/layout.php';
}
?>