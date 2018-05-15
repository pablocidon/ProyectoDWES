<?php
/**
 * File  cBajaUsuario.php
 * @author Lucía.
 *
 * Fichero que contiene el controlador del borrado de los Usuarios.
 * Fecha última revisión 15-05-2018
 */
/**
 * Declaramos la variable departamento que va a contener los datos que nos devuelva la consulta.
 * En el enlace de acceso pasaremos como parámetro el código del departamento, que luego utilizaremos para la
 * búsqueda en la base de datos del mismo.
 */
$usuario = Usuario::buscarUsuarioPorCodigo($_GET['Usuario']);
/**
 * En el caso de que se haya pulsado el botón de no, volveremos a la página de inicio.
 */
if (!isset($_SESSION['usuario'])) { //Comprobamos si no existe la sesion
    header("Location: index.php"); //Si no existe nos manda registrarnos
} else {
    if (isset($_POST['no'])) {
        header('Location: index.php?numeroPagina=1&pagina=mantenimientoUsuarios');
    }
    /**
     * En el caso de pulsar sí, comprobaremos que se ejecuta la consulta, y en el caso de que se ejecute la consulta
     * nos iremos a la página de inicio.
     * En el caso de no pulsar el sí, cargaremos la página de eliminar junto con el layout.
     */
    if (isset($_POST['si'])) {
        if (Usuario::bajaUsuario($_GET['Usuario'])) {
            header('Location: index.php?numeroPagina=1&pagina=mantenimientoUsuarios');
        }
    } else {
        $_GET["pagina"] = "bajaUsuario";
        include_once "vista/layout.php";
    }
}
?>