<?php
if (isset($_POST['volver'])){
    if(isset($_GET['paginaAnterior'])){
        header("Location: index.php?pagina=".$_GET['paginaAnterior']);
    }else{
        header("Location: index.php");
    }
}else{
    $_GET['pagina']="tecnologias";
    require_once "vista/layout.php";
}
?>