<?php
require_once "model/Rest.php";
if (isset($_POST["enviar"])){
    $municipio = str_replace(' ','%20',$_POST["municipio"]);
    $_SESSION["tiempo"] = Rest::consultaRestAEMET($municipio);
}

$_GET["pagina"] = "tiempo";
include_once "view/layout.php";

?>