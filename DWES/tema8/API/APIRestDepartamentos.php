<?php
require_once "../modelo/Departamento.php";

/**
 *Obtenemos el departamento que tenga el código que vamos a buscar.
 */
$codDepartamento = isset($_GET['codDepartamento']) ? htmlspecialchars(strip_tags(trim($_GET['codDepartamento']))) : "";
$resultadoArray = array();
$json = array();
if(!is_null($codDepartamento)){
    $resultadoArray = Departamento::buscarDepartamentoPorCodigo($codDepartamento);
    if($resultadoArray == 1){
        $json = array("Error" => 0, "Departamento" => $resultadoArray);
    }else{
        $json = array("Error" => 1, "msg" => "No se han obtenido resultados");
    }
}else{
    $json = array("Error" => 1, "msg" => "No se ha definido el campo");
}
header('Content-type: application/json');
echo json_encode($json);
?>