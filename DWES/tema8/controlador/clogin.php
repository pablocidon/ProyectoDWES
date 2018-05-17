<?php

/*
 * autor: Lucia Rodriguez Alvarez
 * fecha creacion: 2018-04-06
 * fecha ultima modificacion: 
 * nombre fichero: clogin.php  
 */

$entradaOk=true;
$error="";

if(isset($_POST['enviar'])){ //si existe enviar enviamos el usuario y cotraseña introducidos
        $mensajeError["errorUsuario"]= validacionFormularios::comprobarAlfabetico($_POST['codUsuario'], 10, 1, 1);// comprobamos el campo nombre
        $mensajeError["errorPassword"]= validacionFormularios::comprobarAlfaNumerico($_POST['password'], 255, 4, 1); //comprobamos el campo fecha
        foreach ($mensajeError as &$valor){ //recorremos los mensajes de error
            if ($valor!=null){ //si el mensaje de error NO esta vacio
                $entradaOk=false; // la variable de tratamiento de errores sera falsa y mostraremos los errores
            }
        }
}
        if (isset($_POST['enviar']) && $entradaOk==true){ 
	$codUsuario = $_POST['codUsuario'];
	$password=$_POST['password'];
	$usuario= Usuario::validarUsuario($codUsuario, $password); //comprobamos si el usuario y la contraseña son correctos
        $usuarioFecha= Usuario::buscarUsuarioPorCodigo($codUsuario);


    //$usuario= Usuario::actualizarAccesos($codUsuario);
        if(is_null($usuario)){ //si el usuario no existe, guardamos un mensaje de error
            $error="usuario o contraseña incorrectos";
            $_GET['pagina']='login';
            require_once 'vista/layout.php';
        }else if($usuarioFecha->getFechaBajaUsuario()!=NULL){
            $error="usuario BANEADO";
            $_GET['pagina']='login';
            require_once 'vista/layout.php';
          
        }else{
                $_SESSION['usuario']=$usuario;//
                $_SESSION['usuario']->UltimaConexionyAcceso();
                header("Location: index.php?pagina=inicio");
        }

    }
	$_GET['pagina']='login';
	require_once('vista/layout.php');
