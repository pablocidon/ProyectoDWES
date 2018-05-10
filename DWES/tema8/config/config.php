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
    'copia'=>'vista/vCopiaSeguridad.php',
    "inicio"=>'vista/vinicio.php',
    "login"=>'vista/vlogin.php',
    "WIP"=>'vista/vWIP.php',
    "registrar"=>'vista/vregistro.php',
    "editar"=>'vista/veditar.php',
    "borrar"=>'vista/vborrar.php',
    "baja"=>'vista/vBajaLogicaDepartamento.php',
    "rehabilitar"=>'vista/vRehabilitarDepartamento.php',
    "mantenimientoUsuarios"=>'vista/vMantenimientoUsuarios.php',
    "crearUsuario"=>"vista/vCrearUsuario.php",
    "wip"=>'vista/vWIP.php',
    "soap"=>'vista/vSoap.php',
    "rest"=>'vista/vRest.php',
    "tecnologias"=>'vista/vTecnologias.php'

];
$controladores=[
    'mantenimiento'=>'controlador/cMtoDepartamentos.php',
    'codigo'=>'controlador/ccodigo.php',
    'alta'=>'controlador/cAltaDepartamento.php',
    'modificar'=>'controlador/cModificarDepartamento.php',
    'eliminar'=>'controlador/cEliminarDepartamento.php',
    'copia'=>'controlador/cCopiaSeguridad.php',
    "inicio"=>'controlador/cinicio.php',
    "login"=>'controlador/clogin.php',
    "WIP"=>'controlador/cWIP.php',
    "registrar"=>'controlador/cregistro.php',
    "editar"=>'controlador/ceditar.php',
    "borrar"=>'controlador/cborrar.php',
    "baja"=>'controlador/cBajaLogicaDepartamento.php',
    "rehabilitar"=>'controlador/cRehabilitarDepartamento.php',
    "mantenimientoUsuarios"=>'controlador/cMantenimientoUsuarios.php',
    "crearUsuario"=>"controlador/cCrearUsuario.php",
    "wip"=>'controlador/cWIP.php',
    "soap"=>'controlador/cSoap.php',
    "rest"=>'controlador/cRest.php',
    "tecnologias"=>'controlador/cTecnologias.php'
];

define("REGISTROSPAGINA",5);
define("MAXPAGINAS",3);
?>