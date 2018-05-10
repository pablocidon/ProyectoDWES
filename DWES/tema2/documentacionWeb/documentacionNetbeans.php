<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<script type="text/javascript" src="webroot/js/backtotop.js"></script>
    <div class="container">
        <div class="row col-md-12">
            <h1>ENTORNOS DE DESARROLLO Y EXPLOTACIÓN</h1>
        </div>
        <div class="col-md-12 tecnologias ">
            <div class="row">
                <h1>Instalación y configuración de Netbeans</h1>
                <div class="col-md-2">
                    <dl>
                        <dt><a href="documentacionServidor.php">Servidor web</a></dt>
                    </dl>
                    <dl>
                        <dt><a href="documentacionPhpStorm.php">PhpStorm</a></dt>
                    </dl>
                    <dl>
                        <dt><a href="documentacionNetbeans.php">Netbeans</a></dt>
                        <dd><a href="#instalacion">Instalación</a></dd>
                        <dd><a href="#uso">Utilización</a></dd>
                        <dd><a href="#servidor">Enlace a Servidor</a></dd>
                        <dd><a href="#repositorio">Enlace con Repositorio</a></dd>
                        <dd><a href="#mantenimiento">Mantenimiento</a></dd>
                    </dl>
                </div>
                <div class="col-md-10">
                    <div id="instalacion">
                        <h3>Instalación de Netbeans</h3>
                        <p>Vamos a realizar la instalación de otro IDE, en este caso Netbeans.</p>
                        <ol>
                            <li>
                                En primer lugar tendremos que ir a la página oficial, que se encuentra en el siguiente <a href="https://netbeans.org/downloads/" target="_blank">enlace</a>.
                                <br>En nuestro caso descargaremos la versión que es compatible con todas las tecnologías.
                            </li>
                            <li>
                                Una vez descargado, comenzaremos la instalación. En primer lugar nos mostrará los paquetes que va a instalar el programa:
                                <img src="images/instalarNetbeans.png" alt="Netbeans" class="img-responsive" style="margin-left: 10%">
                            </li>
                            <li>
                                Una vez aceptados los términos de uso, tendremos que establecer el directorio en el que se va a encontrar el programa y el directorio donde se encuentra el JDK.
                                <img src="images/directorioNetbeans.png" alt="Netbeans" class="img-responsive" style="margin-left: 10%">
                            </li>
                            <li>Finalmente comenzará el proceso de la instalación.</li>
                        </ol>
                    </div>
                    <div id="uso">
                        <h3>Utilización de Netbeans</h3>
                        <p>Vamos a crear un proyecto en Netbeans, para ello haremos lo siguiente:</p>
                        <ol>
                            <li>
                                Abrimos nuestro IDE y vamos al cuadro amarillo que situado en la parte superior de nuestra ventana:
                                <img src="images/proyectoNB.png" alt="Netbeans" class="img-responsive" style="margin-left: 15%">
                            </li>
                            <li>
                                A continuación nos mostrará la siguiente ventana en la que tendremos que seleccionar el tipo de proyecto que vamos a crear,
                                en este caso será un proyecto PHP y a su vez seleccionaremos la opción de servidor remoto:
                                <img src="images/proyectoPHP.png" alt="Netbeans" class="img-responsive" style="margin-left: 5%">
                            </li>
                            <li>
                                Luego nos mostrará la siguiente ventana, en la que daremos nombre al proyecto, la ubicación del mismo y la versión de PHP que vamos a utilizar:
                                <img src="images/ubicacionProyectoNB.png" alt="Netbeans" class="img-responsive" style="margin-left: 15%">
                            </li>
                            <li>
                                Dado que nuestro proyecto esta creado como aplicación en servidor remoto, nos mostrará la siguiente ventana, en la que tendremos que introducir la dirección de nuestro servidor y la ubicación del proyecto:
                                <img src="images/ubicacionRemotaNB.png" alt="Netbeans" class="img-responsive" style="margin-left: 15%">
                            </li>
                            <li>
                                En el caso de que no tengamos creada una conexión con el servidor, tendremos que pulsar en el botón "Manage", donde nos mostrará una ventana en la que tendremos que
                                introducir el host, datos de usuario y ubicación dentro del servidor:
                                <img src="images/conexionRemotaNB.png" alt="Netbeans" class="img-responsive" style="margin-left: 15%">
                            </li>
                        </ol>
                    </div>
                    <div id="servidor">
                        <h3>Enlace con Servidor Remoto</h3>
                        <p>Dado que nuestro IDE ofrece la posibilidad de crear la aplicación directamente en el servidor, no es necesario establecer ninguna conexión con el servidor.</p>
                    </div>
                    <div id="repositorio">
                        <h3>Enlace con Repositorio</h3>

                    </div>
                    <div id="mantenimiento">
                        <h3>Mantenimiento de Netbeans</h3>

                    </div>
                    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>
                </div>
            </div>
        </div>
    </div>
<?php
require_once "../../view/pie.php";
?>