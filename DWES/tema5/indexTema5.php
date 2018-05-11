<?php
require_once "../view/cabeceraTemas.php";
?>
<div class="container">
    <div class="row col-md-12">
        <h1>TECNICAS DE ACCESO A DATOS PDO</h1>
    </div>
    <div class="row col-md-12 text-justify tecnologias">
        <table>
            <tr>
                <td><h3>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h3></td>
                <td style="width: 2%;"></td>
                <td>
                    <a href="ejercicio1/ejercicio1.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td style="width: 1%;"></td>
                <td>
                    <a href="ejercicio1/codigo1.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>2. Desarrollo de un control de acceso con identificación del usuario basado en el uso de una tabla “Usuario” de la base de datos. (PDO).</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio2/ejercicio2.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio2/codigo2.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>3. Desarrollo de una aplicación con control de acceso e identificación del usuario basado en un
                    formulario (Login.php) con un botón de “Entrar” y en el uso de una tabla “Usuario” de la base de datos
                    (PDO). En el caso de que tecleemos un usuario y password correctos se abrirá otra página
                    (Programa.php) donde tendremos un botón de “Salir” que nos devolverá al Login.php (Funionalidad
                    Logoff que nos redirige automáticamente a la página de autenticación).</h3>
                    <ul>
                        <li>
                            <h4>Control de acceso, identificación de usuario y estudio de las variables $_SERVER, $_COOKIE y
                                $_SESSION. </h4>
                            <ul>
                                <li>Estudiar la configuración del php.ini relativa al manejo de estas variables.</li>
                                <li>Estudiar el comportamiento (Inicialización, Vida, Elementos que contiene, Borrado) de estas
                                    variables.</li>
                                <li>Estudiar el comportamiento y valor de la cookie en el lado cliente y en el lado servidor.</li>
                                <li>Estudiar la relación entre cookie y sesion. (SID y PHPSESSID)</li>
                                <li>Estudiar el comportamiento de estas variables cuanto nuestra aplicación tiene dos o más páginas
                                    web (Login.php y Programa.php, …). Dibujar el árbol de navegación.</li>
                            </ul>
                        </li>
                        <li>
                            <h4>Control de acceso e identificación de usuario que nos informe de si es la primera vez que
                            accedemos o la fecha y hora del último acceso. (Creación, uso, caducidad y destrucción de una
                            cookie).</h4>
                        </li>
                        <li>
                            <h4>Control de acceso e identificación de usuario que nos informe de si es la primera vez que
                                accedemos o la fecha y hora de los últimos accesos de la sesión correspondiente. (Definición,
                                manejo y destrucción de una sesión).
                            </h4>
                        </li>
                        <li>
                            <h4>Utilizar el contenido del campo Perfil de la tabla Usuario de la siguiente forma: </h4>
                            <ul>
                                <li>Los usuarios con perfil “Administrador” tendrán acceso a toda la funcionalidad del mantenimiento
                                    de departamentos. </li>
                                <li>Los usuarios con perfil “usuario” solo tendrán acceso a la funcionalidad de búsqueda y a la de
                                consulta (detalle) de departamento. No podrán crear, modificar, borrar, importar ni exportar
                                departamentos.</li>
                            </ul>
                        </li>
                    </ul>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio3/login.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio3/codigo3.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                    <!--<a href="../../wip.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>-->
                </td>
            </tr>
            
           
        </table>
       

    </div>
</div>
<?php
require_once "../view/pie.php";
?>