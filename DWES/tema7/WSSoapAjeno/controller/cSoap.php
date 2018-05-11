<?php
require_once "model/Soap.php";
if (isset($_POST["busqueda"])) {
    $_SESSION["respuestaSOAP"] = Soap::consultaSoapIP($_POST["ipSoap"]);
}

if (isset($_POST["volver"])) {
    header("Location: ../indexTema7.php");
}
    $_GET["pagina"] = "soap";
    include_once "view/layout.php";

?>