<?php
/**
 * File  config.php
 * @author Pablo Cidón.
 *
 * Fichero un array con las vistas y otro con los controladores de nuestra aplicación.
 * Fecha última revisión 16-04-2018
 */
$vistas=[
    'mantenimiento'=>'vista/vMtoDepartamentos.php',
    'codigo'=>'vista/vcodigo.php',
    'alta'=>'vista/vAltaDepartamento.php',
    'modificar'=>'vista/vModificarDepartamento.php',
    'eliminar'=>'vista/vEliminarDepartamento.php',
    'copia'=>'vista/vCopiaSeguridad.php'
];
$controladores=[
    'mantenimiento'=>'controlador/cMtoDepartamentos.php',
    'codigo'=>'controlador/ccodigo.php',
    'alta'=>'controlador/cAltaDepartamento.php',
    'modificar'=>'controlador/cModificarDepartamento.php',
    'eliminar'=>'controlador/cEliminarDepartamento.php',
    'copia'=>'controlador/cCopiaSeguridad.php'
];
?>