<?php
include_once "../model/departamento.php";
include_once "../model/DBPDO.php";


ini_set("soap.wsdl_cache_enabled","0");

function verdepartamentos($codDepartamento){
    $consulta="SELECT * FROM Departamento WHERE CodDepartamento = ?";
    $arrayDepartamento = [];
    $resultado = DBPDO::ejecutaConsulta($consulta,[$codDepartamento]);
    if($resultado->rowCount()==1){
        $resultadoFetch = $resultado->fetchObject();
        $arrayDepartamento['Codigo'] = $resultadoFetch->CodDepartamento;
        $arrayDepartamento['Descripcion'] = $resultadoFetch->DescDepartamento;
    }
    foreach($arrayDepartamento as $depart){
        if($depart['Codigo']==$codDepartamento->Codigo){
            return $depart['Codigo'];
        }
    }
    
    return 0;
    
    
}

// inicializamos el server SOAP
$server=new SoapServer("serverSOAP.wsdl",[
    'classmap'=>[
        'departamento'=>'Departamento', // mapeado de 'libro' en el WSDL hacia la clase Libro de PHP
    ]
]);
// Registramos la funcion
$server->addFunction('verdepartamentos');

$server->handle();