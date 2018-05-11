<?php

require_once "model/Rest.php";
$_SESSION["listaCodigoIso"]=json_decode(file_get_contents("http://services.groupkt.com/country/get/all"));
if (isset($_POST["convertir"])){
    $_SESSION["respuestaRest2"] = Rest::consultaRestISO($_POST["isoCode"]);
}
if (isset($_POST["volver"])) {
    header("Location: index.php");
} else {
    $_GET["pagina"] = "rest";
    include_once "view/layout.php";
}
?>