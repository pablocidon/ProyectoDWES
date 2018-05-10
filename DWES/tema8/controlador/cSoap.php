<?php
require_once "modelo/Soap.php";
if (isset($_POST["busqueda"])) {
    $_SESSION["respuestaSOAP"] = Soap::consultaSoapIP($_POST["ipSoap"]);
}

if (isset($_POST["volver"])) {
    if(isset($_GET['paginaAnterior'])){
        header("Location: index.php?pagina=".$_GET['paginaAnterior']);
    }else{
        header("Location: index.php");
    }
}
    $_GET["pagina"] = "soap";
    include_once "vista/layout.php";

?>