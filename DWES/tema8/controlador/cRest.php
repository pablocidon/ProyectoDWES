<?php

require_once "modelo/Rest.php";
$_SESSION["listaCodigoIso"]=json_decode(file_get_contents("http://services.groupkt.com/country/get/all"));
if (isset($_POST["convertir"])){
    $_SESSION["respuestaRest2"] = Rest::consultaRestISO($_POST["isoCode"]);
}
if (isset($_POST["volver"])) {
    if(isset($_GET['paginaAnterior'])){
        header("Location: index.php?pagina=".$_GET['paginaAnterior']);
    }else{
        header("Location: index.php");
    }

} else {
    $_GET["pagina"] = "rest";
    include_once "vista/layout.php";
}
?>