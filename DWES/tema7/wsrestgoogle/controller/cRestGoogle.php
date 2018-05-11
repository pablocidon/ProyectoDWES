<?php
if (isset($_POST['enviar'])){ 
    $latitud=$_POST['latitud']; 
    $longitud=$_POST['longitud']; 
    $marcatiempo=time();
    $datos=restGoogle::zonaHoraria($latitud,$longitud,$marcatiempo); 
}
if (isset($_POST["volver"])) {
    header("Location: index.php");
} else {
    $_GET["pagina"] = "restGoogle";
    include_once "view/layout.php";
}

