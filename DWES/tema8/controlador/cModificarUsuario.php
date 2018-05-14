<?php

if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    /**
     * Declaramos la variable departamento que va a contener los datos que nos devuelva la consulta.
     * En el enlace de acceso pasaremos como parámetro el código del departamento, que luego utilizaremos para la
     * búsqueda en la base de datos del mismo.
     */
    $entradaOk=true;
    $error="";
    $mensajeError="";
    $usuario = Usuario::buscarUsuarioPorCodigo($_GET['Usuario']);
    /**
     * En el caso de pulsar el botón de cancelar nos iremos a la página de inicio.
     */
    if (isset($_POST['volver'])) {
        header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimientoUsuarios');
    }
    /**
     * En el cason de que pulsemos el botón de editar, realizaremos la validación de los campos.
     */
    if (isset($_POST['editar'])) {
        $mensajeError['errorDescripcion'] = validacionFormularios::comprobarAlfabetico($_POST['DescUsuario'], 100, 1, 1);
        foreach ($mensajeError as $valor) {  //recorremos el array de errores
            if ($valor != null) {
                $entradaOk = false;
            }
        }
    }
    
    
    /**
     * En el caso de haber pulsado el botón de editar y no haya errores, comprobaremos que se ejecuta la consulta y si lo hace nos iremos a la página de inicio,
     * y si no se cargará un mensaje de error y se volverá a cargar la misma página.
     */
    //Usuario::editarPerfilUsuario($_POST['DescUsuario',$_POST['Perfil']);
    if (isset($_POST['editar']) && $entradaOk) {
        if (Usuario::editarPerfilUsuario($_POST['DescUsuario'],$_POST['Perfil'],$_POST['CodUsuario'])){
            header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimientoUsuarios');
        } else {
            $mensajeError['errorModificar'] = "Error al modificar el Usuario";
            $_GET["pagina"] = "modificarUsuario";
            include_once "vista/layout.php";
        }
        /**
         * De no haber pulsado ninguno de los botones cargaremos la vista de modificar los departamentos y el layout.
         */
    } else {
        $_GET["pagina"] = "modificarUsuario";
        include_once "vista/layout.php";
    }
}
?>