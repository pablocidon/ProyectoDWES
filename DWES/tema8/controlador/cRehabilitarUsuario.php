<?php
/**
 * File  CRehabilitarUsuario.php
 * @author Lucia.
 *
 * Fichero que contiene el controlador de la rehabilitación de los Usuarios.
 * Fecha última revisión 15-05-2018
 */
/**
 * Declaramos la variable departamento que va a contener los datos que nos devuelva la consulta.
 * En el enlace de acceso pasaremos como parámetro el código del departamento, que luego utilizaremos para la
 * búsqueda en la base de datos del mismo.
 */
$fechaBaja = '';
$usuario= Usuario::buscarUsuarioPorCodigo($_GET['Usuario']);
/**rehabilitarUsuario
 * En el caso de que se haya pulsado el botón de no, volveremos a la página de inicio.
 */
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    if (isset($_POST['no'])) {
        header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimientoUsuarios');
    }
    /**
     * En el caso de pulsar sí, comprobaremos que se ejecuta la consulta, y en el caso de que se ejecute la consulta
     * nos iremos a la página de inicio.
     * En el caso de no pulsar el sí, cargaremos la página de rehabilitar junto con el layout.
     */
    if (isset($_POST['si'])) {
        if (Usuario::rehabilitarUsuario($_GET['Usuario'])) {
            header('Location: index.php?numeroPagina='.$_GET['numeroPagina'].'&pagina=mantenimientoUsuarios');
        }
    } else {
        $_GET["pagina"] = "rehabilitarUsuario";
        include_once "vista/layout.php";
    }
    $_GET["pagina"] = "rehabilitarUsuario";
    include_once "vista/layout.php";
}
?>