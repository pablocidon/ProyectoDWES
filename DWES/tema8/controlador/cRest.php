<?php

require_once "modelo/Rest.php";
$correcto = true;
$mensajeError = array(//Array que contiene los mensajes de error.
    'errorCodDepartamento' => ''
);
$_SESSION["listaCodigoIso"]=json_decode(file_get_contents("http://services.groupkt.com/country/get/all"));
if (isset($_POST["convertir"])){
    $_SESSION["respuestaRest2"] = Rest::consultaRestISO($_POST["isoCode"]);
}
if(isset($_POST['calcular'])){
    $_SESSION['resultadoOperacion'] = Rest::realizarOperacion($_POST['operador1'],$_POST['operador2'],$_POST['tipoOperacion']);
}
if(isset($_POST['consultar'])){
    $mensajeError['errorCodDepartamento'] = validacionFormularios::comprobarAlfaNumerico($_POST['CodDepartamento'], 3, 3, 1);
    foreach ($mensajeError as $valor) {  //recorremos el array de errores
        if ($valor != null) {
            $correcto = false;
        }
    }
    if($correcto){
        $volumen = Rest::consultaRestVolumen($_POST['CodDepartamento']);
    }

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