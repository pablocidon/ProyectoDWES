<?php
require_once "model/Rest.php";
if (isset($_POST["enviar"])){
    $_SESSION["tiempo"] = Rest::consultaRestAEMET($_POST["municipio"]);
}

$_GET["pagina"] = "tiempo";
include_once "view/layout.php";

?>