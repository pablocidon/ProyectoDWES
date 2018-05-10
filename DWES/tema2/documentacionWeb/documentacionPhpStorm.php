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
            <h1>Instalación y uso de PhpStorm</h1>
            <div class="col-md-2">
                <dl>
                    <dt><a href="documentacionServidor.php">Servidor web</a></dt>
                </dl>
                <dl>
                    <dt><a href="documentacionPhpStorm.php">PhpStorm</a></dt>
                    <dd><a href="#instalacion">Instalación</a></dd>
					<dd><a href="#uso">Utilización</a></dd>
                    <dd><a href="#servidor">Enlace a Servidor</a></dd>
                    <dd><a href="#repositorio">Enlace con Repositorio</a></dd>
                    <dd><a href="#mantenimiento">Mantenimiento</a></dd>
                </dl>
                <dl>
                    <dt><a href="documentacionNetbeans.php">Netbeans</a></dt>
                </dl>
            </div>
            <div class="col-md-10">
                <div id="instalacion">
                    <h3>Instalación de PhpStorm</h3>
                    <p>Vamos a realizar la instalación de nuestro IDE, PhpStorm.</p>
                    <ol>
                        <li>
                            En primer lugar tendremos que ir a la web oficial, que se encuentra en el siguiente <a href="https://www.jetbrains.com/phpstorm/" target="_blank">enlace</a>.
                            <br>Dentro de la página tendremos el enlace para realizar la descarga.
                        </li>
                        <li>
                            Una vez descargado comenzaremos la instalación, en primer lugar nos aparecerá un diálogo en el que nos permitirá seleccionar la ubicación donde se va a encontrar el programa.
							<img src="images/ubicacionPhpStorm.PNG" alt="Ubicación del programa" class="img-responsive" style="margin-left: 15%">
                        </li>
						<li>
                            A continuación nos mostrará que versión vamos a instalar, que elementos vamos a instalar junto con el programa.
							<img src="images/versionesPhpStorm.PNG" alt="Ubicación del programa" class="img-responsive" style="margin-left: 15%">
                        </li>
						<li>
                            Luego seleccionaremos el directorio de inicio del programa, en este caso dejaremos el que está por defecto.
							<img src="images/directorio.PNG" alt="Ubicación del programa" class="img-responsive" style="margin-left: 15%">
                        </li>
						<li>
							Una vez instalado, nos solicitará un código, que tendremos que tener previamente, ya que este IDE solamente se puede obtener bajo licencia.
                            <img src="images/codigoLicencia.png" alt="Ubicación del programa" class="img-responsive" style="margin-left: 20%">
                        </li>
						<li>
							Por último ya podremos utilizar nuestro IDE a nuestro antojo.
                        </li>
                    </ol>
                </div>
				<div id="uso">
                    <h3>Utilización de PhpStorm</h3>
                    <p>Vamos a crear un nuevo proyecto, para ello haremos lo siguiente:</p>
                    <ol>
					    <li>
                            Abrimos nuestro IDE y en la página de inicio nos mostrará algo así, donde seleccionaremos la opción de "Crear nuevo proyecto":
                            <img src="images/inicioPhpStorm.png" alt="Crear proyecto" class="img-responsive" style="margin-left: 25%">
                        </li>
                        <li>
                            A conituación tendremos que seleccionar que tipo de proyecto vamos a crear, en este caso PHP, la del mismo se va a usar y donde se va a ubicar:
                            <img src="images/nuevoProyecto.png" alt="Crear proyecto" class="img-responsive" style="margin-left: 10%">
                        </li>
                        <li>
                            Finalmente ya podremos trabajar con nuestro proyecto.
                            <img src="images/proyecto.png" alt="Crear proyecto" class="img-responsive" style="margin-left: 30%">
                        </li>
					</ol>
                </div>
				<div id="servidor">
					<h3>Enlace con servidor remoto</h3>
                    <p>Una vez que ya tenemos nuestro proyecto PHP, será necesario enlazarlo con un servidor ya que si no, no funcionarían nuestros programas.</p>
					<ol>
                        <li>
                            En primer lugar tendremos que ir a la pestaña tools, situada en el menú superior:
                            <img src="images/tools.png" alt="Enlace Servidor" class="img-responsive" style="margin-left: 15%">
                        </li>
                        <li>
                            Seguidamente iremos a la "Deployment" y seleccionaremos la opción de "Configuration":
                            <img src="images/deployment.png" alt="Enlace Servidor" class="img-responsive" style="margin-left: 15%">
                        </li>
                        <li>
                            A continuación nos mostrará una venta con el siguiente menú donde le daremos a "+":
                            <img src="images/nuevaConexion.png" alt="Enlace Servidor" class="img-responsive" style="margin-left: 25%">
                        </li>
                        <li>
                            Seguidamente estableceremos un nombre para la conexión y el tipo de conexión que va a ser:
                            <img src="images/AddServer.png" alt="Enlace Servidor" class="img-responsive" style="margin-left: 25%">
                        </li>
                        <li>
                            Finalmente realizaremos la configuración para establecer la conexión:
                            <img src="images/configuracionConexion.png" alt="Enlace Servidor" class="img-responsive" style="margin-left: 10%">
                        </li>
					</ol>
				</div>
				<div id="repositorio">
					<h3>Enlace con repositorio</h3>
                    <p>Otra cosa importante que debemos conocer es como establecer una conexión con un repositorio remoto en donde guardar una copia del código.</p>
					<ol>
					    <li>
                            En primer lugar iremos a "VCS", situado en el menú superior:
                            <img src="images/vcs.png" alt="Enlace Repositorio" class="img-responsive" style="margin-left: 10%">
                        </li>
                        <li>
                            A continuación seleccionaremos la opción de "GIT" y dentro de esta seleccionaremos "Remotes":
                            <img src="images/remotes.png" alt="Enlace Repositorio" class="img-responsive" style="margin-left: 10%">
                        </li>
                        <li>
                            Luego nos saldrá una ventana en la que nos mostrará los enlaces que tenemos con repositorios:
                            <img src="images/GitRemotes.png" alt="Enlace Repositorio" class="img-responsive" style="margin-left: 10%">
                        </li>
                        <li>
                            Si queremos crear una nueva conexión solamente tendremos que dar en el "+" y luego nos mostrará algo como esto:
                            <img src="images/DefineRemote.png" alt="Enlace Repositorio" class="img-responsive" style="margin-left: 20%">
                        </li>
                    </ol>
				</div>
				<div id="mantenimiento">
					<h3>Mantenimiento de PhpStorm</h3>
                    <p>Una de las cosas que tendremos que manejar en nuestro IDE son los plugins, para instalarlos tendremos que hacer lo siguiente:</p>
					<ol>
					    <li>
                            En primer lugar en la página de inicio tendremos que ir a configure, situado en la parte inferior de la misma:
							<img src="images/configure.png" alt="Instalar Plugins" class="img-responsive" style="margin-left: 20%">
                        </li>
						<li>
							Dentro, seleccionaremos la opción "Plugins", donde nos mostrará una ventana con todos los plugins disponibles:
							<img src="images/Plugins.png" alt="Instalar Plugins" class="img-responsive" style="margin-left: 15%">
						</li>
						<li>
							A continuación seleccionaremos el que vamos a instalar y le damos al boton de instalar plugin:
							<img src="images/instalarPlugin.png" alt="Instalar Plugins" class="img-responsive" style="margin-left: 10%">
						</li>
						<li>Una vez instalado tendremos que reiniciar nuestro IDE.</li>
					</ol>
				</div>
                <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>
            </div>
        </div>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>
