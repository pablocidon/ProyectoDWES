<?php
/**
 * En primer lugar obtenemos los números con los que vamos a operar.
 * Usamos float para indicar que van a ser valores númericos que puden ser enteros o decimales.
 * Con la función trim eliminaremos caracteres en blanco, tabulaciones, saltos de línea de la cadena recibida.
 * Con la función strip_tags lo que haremos será eliminar etiquetas html o php.
 * Con la función htmlspecialchars convertiremos en entidades HTML los caracteres especiales que puedan ser recibidos.
 */
$operador1 = (float) isset($_GET['operador1']) ? htmlspecialchars(strip_tags(trim($_GET['operador1']))) : "";
$operador2 = (float) isset($_GET['operador2']) ? htmlspecialchars(strip_tags(trim($_GET['operador2']))) : "";
$tipoOperacion = isset($_GET['tipoOperacion']) ? htmlspecialchars(strip_tags(trim($_GET['tipoOperacion']))) : "";
$resultado = 0;
$resultadoArray = array();
$json = array();
//Comprobamos que los valores de las variables no sean null para realizar operaciones
if(!is_null($operador1) && !is_null($operador2)){
    //Comprobamos que los valores sean numéricos
    if(is_numeric($operador1) && is_numeric($operador2)){
        //Comprobamos el tipo de operación y la realizamos
        switch ($tipoOperacion){
            case "suma";
                $resultado = $operador1 + $operador2;
                break;
            case "resta";
                $resultado = $operador1 - $operador2;
                break;
            case "multiplicacion";
                $resultado = $operador1 * $operador2;
                break;
            case "division";
                $resultado = $operador1 / $operador2;
                break;

        }
        //Cargamos los valores en un array asociativo
        $resultadoArray[] = array("Operador1" => $operador1, "Operacion" => $tipoOperacion, "Operador2" => $operador2, "Resultado" => $resultado);
        $json = array("Error" => 0, "Resultado" => $resultadoArray);
    }else{
        //Si los valores no son numéricos mostramos el mensaje de error
        $json = array("Error" => 1, "msg" => "Los valores deben ser numéricos");
    }
}else{
    //Si no hay valores mostramos el mensaje de error
    $json = array("Error" => 1, "msg" => "Los valores no están definidos");
}
header('Content-type: application/json');
echo json_encode($json);
?>