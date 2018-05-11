<?php
/**
 * File  config.php
 * @author Pablo Cidón.
 *
 * Fichero un array con las vistas y otro con los controladores de nuestra aplicación.
 * Fecha última revisión 16-04-2018
 */
$vistas=[
    'soap'=>'view/vSoap.php',
    'codigo'=>'view/vCodigo.php',
    'rest'=>'view/vRest.php',
    'tiempo'=>'view/vAemet.php',
    'google'=>'view/vGoogle.php'
];
$controladores=[
    'soap'=>'controller/cSoap.php',
    'codigo'=>'controller/cCodigo.php',
    'rest'=>'controller/cRest.php',
    'tiempo'=>'controller/cAemet.php',
    'google'=>'controller/cGoogle.php'
];
?>