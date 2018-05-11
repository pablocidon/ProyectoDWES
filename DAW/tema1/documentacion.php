<?php
    require_once "view/cabecera.php";
?>
<div class="container">
    <div class="row col-md-12">
        <h1>IMPLANTACIÓN DE APLICACIONES WEB</h1>
    </div>
    <div class="col-md-12 tecnologias ">
        <div class="row">
            <h1>Instalación de un servidor web de aplicaciones</h1>
            <div class="col-md-2">
                <dl>
                    <dt><a href="#apache">Apache</a></dt>
                    <dd><a href="#usoApache">Utilización</a></dd>
                    <dd><a href="#instalacionApache">Instalación</a></dd>
                    <dd><a href="#configuracionApache">Configuración</a></dd>
                    <dd><a href="#estadoApache">Estado</a></dd>
                    <dd><a href="#mtoApache">Mantenimiento</a></dd>
                </dl>
                <dl>
                    <dt><a href="#php">PHP</a></dt>
                    <dd><a href="#usoPHP">Utilización</a></dd>
                    <dd><a href="#instalacionPHP">Instalación</a></dd>
                    <dd><a href="#configuracionPHP">Configuración</a></dd>
                    <dd><a href="#estadoPHP">Estado</a></dd>
                    <dd><a href="#mtoPHP">Mantenimiento</a></dd>
                </dl>
                <dl>
                    <dt><a href="#mysql">MySQL</a></dt>
                    <dd><a href="#usoMySQL">Utilización</a></dd>
                    <dd><a href="#instalacionMySQL">Instalación</a></dd>
                    <dd><a href="#configuracionMySQL">Configuración</a></dd>
                    <dd><a href="#estadoMySQL">Estado</a></dd>
                    <dd><a href="#mtoMySQL">Mantenimiento</a></dd>
                </dl>
                <dl>
                    <dt><a href="#phpmyadmin">phpMyAdmin</a></dt>
                    <dd><a href="#usoPhpmyadmin">Utilización</a></dd>
                    <dd><a href="#instalacionPhpmyadmin">Instalación</a></dd>
                    <dd><a href="#configuracionPhpmyadmin">Configuración</a></dd>
                    <dd><a href="#estadoPhpmyadmin">Estado</a></dd>
                    <dd><a href="#mtoPhpmyadmin">Mantenimiento</a></dd>
                </dl>
                <dl>
                    <dt><a href="#ssh">OpenSSH</a></dt>
                    <dd><a href="#usoSSH">Utilización</a></dd>
                    <dd><a href="#instalacionSSH">Instalación</a></dd>
                    <dd><a href="#configuracionSSH">Configuración</a></dd>
                    <dd><a href="#estadoSSH">Estado</a></dd>
                    <dd><a href="#usuarioSSH">Usuarios SSH</a></dd>
                    <dd><a href="#enjaularUsuarios">Enjaular usuarios SSH</a></dd>
                </dl>
            </div>
            <div class="col-md-10">
                <div id="apache">
                    <h2>Apache</h2>
                    <div id="usoApache">
                        <h3>Utilización de Apache</h3>
                        <p>
                            Apache es usado principalmente para enviar páginas web estáticas y dinámicas en la World Wide Web.
                            Muchas aplicaciones web están diseñadas asumiendo como ambiente de implantación a Apache, o que
                            utilizarán características propias de este servidor web.
                        </p>
                        <p>
                            Apache es el componente de servidor web en la popular plataforma de aplicaciones LAMP, junto a MySQL
                            y los lenguajes de programación PHP/Perl/Python (y ahora también Ruby).
                        </p>
                        <p>
                            Este servidor web es redistribuido como parte de varios paquetes propietarios de software, incluyendo
                            la base de datos Oracle y el IBM WebSphere application server. Mac OS X integra apache como parte de su
                            propio servidor web y como soporte de su servidor de aplicaciones WebObjects. Es soportado de alguna
                            manera por Borland en las herramientas de desarrollo Kylix y Delphi. Apache es incluido con Novell
                            NetWare 6.5, donde es el servidor web por defecto, y en muchas distribuciones Linux.
                        </p>
                        <p>
                            Apache es usado para muchas otras tareas donde el contenido necesita ser puesto a disposición en una
                            forma segura y confiable. Un ejemplo es al momento de compartir archivos desde una computadora personal
                            hacia Internet. Un usuario que tiene Apache instalado en su escritorio puede colocar arbitrariamente
                            archivos en la raíz de documentos de Apache, desde donde pueden ser compartidos.
                        </p>
                        <p>
                            Los programadores de aplicaciones web a veces utilizan una versión local de Apache
                            con el fin de previsualizar y probar código mientras éste es desarrollado.
                        </p>
                        <p>
                            Microsoft Internet Information Services (IIS) es el principal competidor de Apache, así como
                            Sun Java System Web Server de Sun Microsystems y un anfitrión de otras aplicaciones como Zeus Web Server.
                            Algunos de los más grandes sitios web del mundo están ejecutándose sobre Apache. La capa frontal (front end)
                            del motor de búsqueda Google está basado en una versión modificada de Apache, denominada Google Web Server (GWS).
                            Muchos proyectos de Wikimedia también se ejecutan sobre servidores web Apache.
                        </p>
                    </div>
                    <div id="instalacionApache">
                        <h3>Instalación de Apache</h3>
                        <p>Vamos a proceder a la instalación de nuestro servidor web Apache para ello, haremos lo siguiente:</p>
                        <ol>
                            <li>
                                <p>Realizaremos la actualización de nuestro repositorio, para ello introduciremos el siguiente comando: </p>
                                <pre>
    sudo apt-get update
</pre>
                            </li>
                            <li>
                                <p>A continuación, procederemos a la instalación del servidor web Apache:</p>
                                <pre>
    sudo apt-get install apache2
</pre>
                            </li>
                        </ol>
                        <p>
                            Dado que estas operaciones se realizan con <b>sudo</b>, el sistema solicitará la contraseña del usuario administrador.
                            Para no tener que estar introduciendo la contraseña en todo momento, puede hacer lo siguiente:
                        </p>
                        <pre>
    sudo su
</pre>
                        <p>
                            Para comprobar que el servicio de apache está instalado, tendremos que ir un navegador, e introducir la dirección IP de nuestro servidor
                            y nos tendrá que salir algo como esto:
                        </p>
                        <img src="images/apacheDefaultPage.PNG" alt="Pagina de Inicio de Apache" class="img-responsive" style="margin-left: 6%">
                    </div>
                    <div id="configuracionApache">
                        <h3>Configuración de Apache</h3>
                        <p>Para realizar operaciones de configuración en Apache, tendremos que acceder a su fichero de configuración:</p>
                        <pre>
    sudo nano /etc/apache2/apache2.conf
</pre>
                        <p>Dentro de este fichero encontraremos la configuración del servicio, así como donde se va a encontrar nuestro sitio web.</p>
                        <p>Por el contrario, si lo que queremos es realizar la configuración de nuestro sitio, tendremos que ir al siguiente fichero:</p>
                        <pre>
    sudo nano /etc/apache2/sites-enabled/000-default.conf
</pre>
                    </div>
                    <div id="estadoApache">
                        <h3>Servicio de Apache</h3>
                        <p>Con el servicio de apache se pueden realizar varias operaciones. Estas son:</p>
                        <p>Comprobar el estado del servicio de apache:</p>
                        <pre>
    sudo service apache2 status
</pre>
                        <p>Que nos mostrará algo como esto: </p>
                        <img src="images/serviceStatus.PNG" alt="Service Apache2 Status" class="img-responsive" style="margin-left: 15%">
                        <p>También podemos reiniciar el servicio de apache: </p>
                        <pre>
    sudo service apache2 restart
</pre>
                        <p>También podemos recargar el servicio de apache: </p>
                        <pre>
    sudo service apache2 reload
</pre>
                        <p>También podemos parar el servicio de apache: </p>
                        <pre>
    sudo service apache2 stop
</pre>
                        <p>También podemos arrancar el servicio de apache: </p>
                        <pre>
    sudo service apache2 start
</pre>
                    </div>
                    <div id="mtoApache">
                        <h3>Mantenimiento de Apache</h3>
                        <li>
                            <p>En el fichero "/etc/apache2/sites-enabled/000-default.conf ", cambiamos el DocumentRoot:</p>
                            <pre>
    DocumentRoot /var/www/html/public_html
</pre>
                            <p>Una vez modificado tendremos que reinicar el servicio de apache.</p>
                        </li>
                    </div>
                </div>
                <div id="php">
                    <h3>PHP</h3>
                    <div id="usoPHP">
                        <h4>Utilización de PHP</h4>
                        <p>
                            PHP es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y
                            que puede ser incrustado en HTML. Para poder desarrollar en este lenguaje es necesario que instalemos una
                            librería de Apache para que nuestro servidor sea capaz de interpretar dicho lenguaje.
                        </p>
                    </div>
                    <div id="instalacionPHP">
                        <h4>Instalación de PHP</h4>
                        <p>Para instalar la librería de PHP en Apache, haremos lo siguiente: </p>
                        <ol>
                            <li>
                                <p>Instalamos el PHP:</p>
                                <pre>
    sudo apt-get install php7.0
</pre>
                            </li>
                            <li>
                                <p>Luego instalamos el módulo de Apache para PHP</p>
                                <pre>
    sudo apt-get install libapache2-mod-php
</pre>
                            </li>
                            <li>
                                <p>A continuación crearemos un archivo "info.php" en "/var/www/html" en el que introduciremos el siguiente código: </p>
                                <pre>
    &lt;?php phpinfo(); ?&gt;
</pre>
                            </li>
                            <li>
                                <p>
                                    Por último iremos a un navegador e introduciremos la "IP de nuestro servidor /info.php" y nos saldrá algo como esto
                                    mostrándonos toda la información acerca de nuestra configuración de PHP.
                                </p>
                                <img src="images/phpinfo.PNG" alt="info.php" class="img-responsive">
                            </li>
                        </ol>
                    </div>
                    <div id="configuracionPHP">
                        <h4>Configuración de PHP</h4>
                        <p>Toda la configuración de PHP se encuentra en el fichero /etc/php/7.0/apache2/php.ini.</p>
                        <p>Como nuestro servidor es de desarrollo, activaremos los errores para que los muestre en el caso de que haya alguno.</p>
                        <ol>
                            <li>
                                <p>Vamos al fichero php.ini para editarlo, para ello introduciremos el siguiente comando:</p>
                                <pre>
    sudo nano /etc/php/7.0/apache2/php.ini
</pre>
                            </li>
                            <li>
                                <p>Dentro de la siguiente línea cambiaremos lo siguiente: </p>
                                <pre>
    display_errors = Off
</pre>
                                <p>Lo cambiamos de la siguiente forma: </p>
                                <pre>
    display_errors = On
</pre>
                            </li>
                        </ol>
                    </div>
                    <div id="estadoPHP">
                        <h4>Servicio de PHP</h4>
                        <p>PHP no es un servicio, por lo que se podrá controlar.</p>
                    </div>
                    <div id="mtoPHP">
                        <h4>Mantenimiento de PHP</h4>
                    </div>
                </div>
                <div id="mysql">
                    <h3>MySQL</h3>
                    <div id="usoMySQL">
                        <h4>Utilización de MySQL</h4>
                        <p>
                            MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo licencia dual:
                            Licencia pública general/Licencia comercial por Oracle Corporation y está considerada
                            como la base datos de código abierto más popular del mundo​ y una de las más populares
                            en general junto a Oracle y Microsoft SQL Server, sobre todo para entornos de desarrollo web.
                        </p>
                    </div>
                    <div id="instalacionMySQL">
                        <h4>Instalación de MySQL</h4>
                        <ol>
                            <li>
                                <p>Para instalar MySQL, solamente tendremos que introducir el siguiente comando: </p>
                                <pre>
    sudo apt-get install mysql-server
</pre>
                            </li>
                            <li>
                                <p>Establecemos la contraseña para el administrador de las bases de datos.</p>
                                <img src="images/passroot.PNG" alt="Contraseña root MySQL" class="img-responsive" style="margin-left: 5%">
                            </li>
                        </ol>
                    </div>
                    <div id="configuracionMySQL">
                        <h4>Configuración de MySQL</h4>
                        <p>Toda la configuración de mysql se encuentra en el fichero /etc/mysql/mysql.conf.d/mysqld.cnf.
                            En nuestro caso vamos a editarlo para que permita el acceso a nuestro servidor de mysql desde cualquier sitio.</p>
                        <ol>
                            <li>
                                <p>En primer lugar vamos al fichero, para ello haremos lo siguiente:</p>
                                <pre>
    sudo nano /etc/mysql/mysql.conf.d/mysqld.cnf
</pre>
                            </li>
                            <li>
                                <p>Una vez dentro comentamos la siguiente linea: </p>
                                <pre>
    # bind-address = 127.0.0.1
</pre>
                            </li>
                            <li>
                                <p>Por uúltimo guardaremos los cambios y reiniciaremos el servicio de MySQL.</p>
                            </li>
                        </ol>
                    </div>
                    <div id="estadoMySQL">
                        <h4>Servicio de MySQL</h4>
                        <p>Con el servicio de MySQL se pueden realizar las siguientes operaciones</p>
                        <p>Arrancar el servicio de MySQL:</p>
                        <pre>
    sudo service mysql start
</pre>
                        <p>Parar el servicio:</p>
                        <pre>
    sudo service mysql stop
</pre>
                        <p>Reiniciar el servicio:</p>
                        <pre>
    sudo service mysql restart
</pre>
                        <p>Comprobar el estado del servicio:</p>
                        <pre>
    sudo service mysql status
</pre>
                        <p>Lo que nos mostrará algo como esto:</p>
                        <img src="images/mysqlStatus.PNG" alt="Status MySQL" class="img-responsive" style="margin-left: 23%">
                    </div>
                    <div id="mtoMySQL">
                        <h4>Mantenimiento de MySQL</h4>
                    </div>
                </div>
                <div id="phpmyadmin">
                    <h3>phpMyAdmin</h3>
                    <div id="usoPhpmyadmin">
                        <h4>Utilización de phpMyAdmin</h4>
                        <p>
                            phpMyAdmin es una herramienta de software libre escrita en PHP , destinada a manejar la administración de MySQL
                            a través de la Web. phpMyAdmin es compatible con una amplia gama de operaciones en MySQL y MariaDB.
                            Las operaciones de uso frecuente (administración de bases de datos, tablas, columnas, relaciones,
                            índices, usuarios, permisos, etc.) pueden realizarse a través de la interfaz de usuario, mientras
                            que usted todavía tiene la capacidad de ejecutar directamente cualquier declaración de SQL.
                        </p>
                    </div>
                    <div id="instalacionPhpmyadmin">
                        <h4>Instalación de phpMyAdmin</h4>
                        <p>Para instalar phpMyAdmin tendremos que introducir el siguiente comando:</p>
                        <pre>
    sudo apt-get install phpmyadmin
</pre>
                        <p>Durante la instalación, nos mostrará los servidores que querramos que configure automaticamente, en este caso seleccionaremos el de apache, ya que es con el que estamos trabajando</p>
                        <img src="images/instalacionphpMyAdmin.PNG" alt="Seleccion de Apache" class="img-responsive" style="margin-left: 7%">
                        <p>Seguidamente nos pedirá la contraseña de nuestro servidor de MySQL.</p>
                        <p>Una vez que esté instalado, podremos acceder a la herramienta de la siguiente forma:</p>
                        <pre>
    http://número de host/phpmyadmin
</pre>
                        <p>Y nos mostrará la siguiente ventana: </p>
                        <img src="images/phpmyadmin.PNG" alt="Inicio phpmyadmin" class="img-responsive" style="margin-left: 22%">
                    </div>
                    <div id="configuracionPhpmyadmin">
                        <h4>Configuración de phpMyAdmin</h4>
                        <p>Para realizar las configuraciones de phpMyAdmin, tendremos que ir al siguiente fichero: </p>
                        <pre>
    sudo nano /etc/phpmyadmin/config.inc.php
</pre>
                    </div>
                    <div id="estadoPhpmyadmin">
                        <h4>Servicio de phpMyAdmin</h4>
                        <p>No se puede trabajar con el servicio de phpMyAdmin</p>
                    </div>
                    <div id="mtoPhpmyadmin">
                        <h4>Mantenimiento de phpMyAdmin</h4>
                    </div>
                </div>
                <div id="ssh">
                    <h3>Servidor OpenSSH</h3>
                    <div id="usoSSH">
                        <h4>Utilización de OpenSSH</h4>
                        <p>
                            OpenSSH es la principal herramienta de conectividad para inicio de sesión remoto con el protocolo SSH.
                            Encripta todo el tráfico para eliminar el espionaje, el secuestro de la conexión y otros ataques.
                            Además, OpenSSH proporciona un amplio conjunto de capacidades seguras de túnel,
                            varios métodos de autenticación y opciones de configuración sofisticadas.
                        </p>
                    </div>
                    <div id="instalacionSSH">
                        <h4>Instalación de OpenSSH</h4>
                        <pre>
    sudo apt-get install openssh-server
</pre>

                    </div>
                    <div id="configuracionSSH">
                        <h4>Configuración de OpenSSH</h4>
                        <p>OpenSSH cuenta con dos ficheros de configuración, para editar el fichero del cliente:</p>
                        <pre>
    sudo nano /etc/ssh/sshd_config
</pre>
                        <p>Y el del servidor:</p>
                        <pre>
    sudo nano /etc/ssh/ssh_config
</pre>
                    </div>
                    <div id="estadoSSH">
                        <h4>Servicio de OpenSSH</h4>
                        <p>Con el servicio de SSH se pueden realizar las siguientes operaciones</p>
                        <p>Arrancar el servicio de SSH:</p>
                        <pre>
    sudo service ssh start
</pre>
                        <p>Parar el servicio:</p>
                        <pre>
    sudo service ssh stop
</pre>
                        <p>Reiniciar el servicio de SSH:</p>
                        <pre>
    sudo service ssh restart
</pre>
                        <p>Comprobar el estado del servicio:</p>
                        <pre>
    sudo service ssh status
</pre>
                        <p>Lo que nos mostrará algo como esto:</p>
                        <img src="images/sshstatus.PNG" alt="Status MySQL" class="img-responsive" style="margin-left: 10%">
                    </div>
                    <div id="usuarioSSH">
                        <h4>Usuarios de SSH</h4>
                        <p>Vamos a crear un usuario, no enjaulado, para conectarnos por SFTP a nuestro sitio, para ello haremos lo siguiente:</p>
                        <ol>
                            <li>
                                <p>Para crear el usuario introducimos el siguiente comando:</p>
                                <pre>
    sudo useradd -g www-data -d /var/www/html -s /bin/bash operadorweb
</pre>
                                <p>Donde: </p>
                                <ul>
                                    <li><b>-g: </b>es el grupo al que pertenece.</li>
                                    <li><b>-d: </b>es el home del usuario.</li>
                                    <li><b>-s: </b>es el shell del usuario y del que depende que pueda o no iniciar sesión en el sistema.</li>
                                </ul>
                            </li>
                            <li>
                                <p>Dado que al crearlo no nos ha solicitado la contraseña, para asignarle una, haremos lo siguiente: </p>
                                <pre>
    sudo passwd operadorweb
</pre>
                            </li>
                            <li>
                                <p>Ahora cambiaremos el propietario del fichero "/var/www/html", para ello introduciremos el siguiente comando:</p>
                                <pre>
    sudo chown -R operadorweb:www-data /var/www/html
</pre>
                            </li>
                            <li>
                                <p>Ahora cambiaremos los permisos del usuario sobre el fichero:</p>
                                <pre>
    sudo chmod -R 775 /var/www/html
</pre>
                            </li>
                            <li>
                                <p>Por último desde el cliente, comprobaremos que el usuario se puede conectar:</p>
                                <img src="images/filezilla.PNG" alt="" class="img-responsive"><br>
                                <p>Ahora ya podremos realizar la subida de archivos mediante SFTP a nuestro servidor.</p>
                            </li>
                        </ol>
                    </div>
                    <div id="enjaularUsuarios">
                        <h4>Enjaular usuarios de SSH</h4>
                        <p>Vamos a enjaular un usuario para que, cuando se conecte por FTP, solamente pueda acudir a su directorio.</p>
                        <ol>
                            <li>
                                <p>En primer lugar vamos a crear el directorio "/var/www/html/public_html" donde se va a encontrar nuestro sitio:</p>
                                <pre>
    sudo mkdir /var/www/html/public_html
</pre>
                            </li>
                            <li>
                                <p>Como el directorio del sitio va a ser otro, tendremos que mover nuestros archivos al directorio public_html:</p>
                                <pre>
     sudo mv info.php public_html
</pre>
                                <p>Donde: </p>
                                <ul>
                                    <li><b>info.php</b> es el nombre del fichero a mover</li>
                                    <li><b>public_html</b> es el directorio de destino</li>
                                </ul>
                            </li>
                            <li>
                                <p>Dado que para enjaular al usuario el directorio tiene que pertenecer a root:root, tendremos que cambiar el propietario, pero solamente a /var/www/html, por lo que no lo haremos recursivo: </p>
                                <pre>
     sudo chown root:root /var/www/html
</pre>
                            </li>
                            <li>
                                <p>En el fichero "/etc/apache2/sites-enabled/000-default.conf ", cambiamos el DocumentRoot:</p>
                                <pre>
    DocumentRoot /var/www/html/public_html
</pre>
                                <p>Una vez modificado tendremos que reinicar el servicio de apache.</p>
                            </li>
                            <li>
                                <p>Ahora cambiaremos los permisos del usuario sobre el fichero:</p>
                                <pre>
    sudo chmod -R 775 /var/www/html/public_html
</pre>
                            </li>
                            <li>
                                <p>Ahora ya podremos enjaular el usuario, para ello haremos lo siguiente:</p>
                                <ol>
                                    <li>
                                        <p>Haremos una copia de seguridad del fichero /etc/ssh/sshd_config</p>
                                        <pre>
    sudo cp /etc/ssh/sshd_config /etc/ssh/sshd_config.old
</pre>
                                    </li>
                                    <li>
                                        <p>Dentro del fichero /etc/ssh/sshd_config editaremos la siguiente línea:</p>
                                        <pre>
    Subsystem sftp /usr/lib/openssh/sftp-server
</pre>
                                        <p>Por lo siguiente: </p>
                                        <pre>
    Subsystem sftp internal-sftp
</pre>
                                    </li>
                                    <li>
                                        <p>A continuación realizamos el enjaulado, dado que puede que tengamos más de un usuario, lo haremos a través del grupo:</p>
                                        <pre>
    UsePAM yes
    Match Group www-data
    ChrootDirectory %h
    ForceCommand internal-sftp
</pre>
                                    </li>
                                    <li>Finalmente guardamos los cambios y reiniciamos el servicio de SSH</li>
                                </ol>
                            </li>
                            <li>
                                <p>Por último comprobamos que el usuario está enjaulado: </p>
                                <img src="images/jaula.PNG" class="img-responsive" alt="">
                            </li>
                        </ol>
                    </div>
                </div>
                <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>
            </div>
        </div>

    </div>
</div>
<?php
require_once "view/pie.php";
?>

