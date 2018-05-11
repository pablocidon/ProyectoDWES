<?php
require_once "model/Rest.php";
if (isset($_POST["consultar"])){
    $resultados = Rest::consultaRestGoogle($_POST['origen'],$_POST['destino']);
    var_dump($resultados['results']);
}

$_GET["pagina"] = "google";
include_once "view/layout.php";

?>