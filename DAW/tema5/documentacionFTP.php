<?php
require_once "view/cabecera.php";
?>
<div class="container">
    <h1>SERVIDORES PROFTPD</h1>
    <div class="col-md-12 tecnologias ">
        <div class="row">
            <h1>Instalación y configuración de ProFTPD</h1>
            <div class="col-md-2">
                <dl>
                    <dt><a href="#proFTPD">ProFTPD</a></dt>
                    <dd><a href="#usoProFTPD">Utilización</a></dd>
                    <dd><a href="#instalacionProFTPD">Instalación</a></dd>
                    <dd><a href="#configuracionProFTPD">Configuración</a></dd>
                    <dd><a href="#estadoProFTPD">Servicio</a></dd>
                    <dd><a href="#mtoProFTPD">Mantenimiento</a></dd>
                    <dd><a href="#estructura">Estructura de directorios</a></dd>
                </dl>
            </div>
            <div class="col-md-10">
                <div id="proFTPD">
                    <h2>ProFTPD</h2>
                </div>
                <div id="usoProFTPD">
                    <h3>Utilización de ProFTPD</h3>
                    <p>
                        ProFTPd es un servidor FTP. Se promociona desde su página web como estable y seguro, cuando se configura correctamente.
                        El servidor ProFTPd se promociona a sí mismo como un "Software servidor FTP altamente configurable con licencia GPL"
                        ("Highly configurable GPL-licensed FTP server software").
                    </p>
                    <p>
                        Los promotores dicen que ProFTPd está bien documentado,
                        y la mayoría de configuraciones serán muy parecidas a aquellas que aparecen en las configuraciones de ejemplo.
                        ProFTPd usa un único fichero de configuración "/etc/proftpd.conf". El fichero de configuración es muy similar al
                        que tiene Apache. Puede ser fácilmente configurado como múltiples servidores FTP virtuales, y tiene capacidades
                        para ser enjaulado dependiendo del sistema de archivos que haya por debajo. Puede ejecutarse con un demonio propio
                        o como un servicio más de inetd. Es capaz de trabajar sobre IPv6.
                    </p>
                    <p>
                        Su diseño es modular, lo que permite escribir extensiones como cifrado SSL/TLS, RADIUS, LDAP o SQL como módulos.
                    </p>
                </div>
                <div id="instalacionProFTPD">
                    <h3>Instalación de ProFTPD</h3>
                    <p>
                        En primer lugar realizaremos la actualización del repositorio de aplicaciones de ubuntu. Para ello ejecutaremos el siguiente comando:
                    </p>
                    <pre>
    sudo apt-get update
</pre>
                    <p>Una vez actualizado, procederemos a la instalación de Bind, para ello ejecutaremos el siguiente comando:</p>
                    <pre>
    sudo apt-get install proftpd
</pre>
                    <p>Durante la instalación nos mostrará dos opciones: </p>
<pre>
    inetd //Utilizada para pocas conexiones remotas
    independiente //Utilizada para realizar gran cantidad de conexiones remotas
</pre>
                    <p>En nuestro caso, instalaremos la opción "indetd", ya que para nuestro servidor nos vale con esa.</p>
                </div>
                <div id="configuracionProFTPD">
                    <h3>Configuración de ProFTPD</h3>
                    <p>Una vez instalado, configuraremos nuestro servidor de FTP para que los usuarios estén enjaulados, para ello iremos al fichero /etc/proftpd/proftp.conf</p>
<pre>
    sudo nano /etc/proftpd/proftpd.conf
</pre>
                    <p>Dentro del fichero descomentaremos la siguiente línea: </p>
<pre>
    DefaultRoot                    ~
</pre>
                    <p>Guardamos los cambios, reiniciamos el servicio de proftp y comprobamos desde un cliente FTP que funciona correctamente:</p>
                    <img src="webroot/img/jaulas.png" class="img-responsive" alt="Enjaulado ProFTPD" style="margin-left: 30%">
                </div>
<div id="estadoProFTPD">
                    <h3>Servicio ProFTPD</h3>
                    <p>Reiniciar el servicio de ProFTPD:</p>
<pre>
    sudo service proftpd restart
</pre>
                    <p>Comprobar el servicio de ProFTPD:</p>
<pre>
    sudo service proftpd status
</pre>
                    <p>Nos mostrará algo como esto:</p>
                    <img src="webroot/img/serviceStatus.png" class="img-responsive" alt="Estado ProFTPD" style="margin-left: 15%">
                    <p>Arrancar el servicio ProFTPD:</p>
                    <pre>
    sudo service proftpd start
</pre>
                    <p>Parar el servicio ProFTPD:</p>
                    <pre>
    sudo service proftpd stop
</pre>
                </div>
                <div id="mtoProFTPD">
                    <h3>Mantenimiento de ProFTPD</h3>
                    <h4>Usuarios de ProFTPD</h4>
                    <p>Vamos a crear usuarios virtuales ftp, para ello haremos lo siguiente:</p>
                    <ol>
                        <li>
                            <p>Vamos al fichero /etc/proftpd/proftpd.conf, en donde descomentaremos la siguiente línea, para que lea las zonas virtuales:</p>
<pre>
    Include /etc/proftpd/virtuals.conf
</pre>
                        <p>Guardamos los cambios y reiniciamos el servicio de proftpd.</p>
                        </li>
                        <li>
                            <p>Para crear los usuarios FTP, necesitaremos saber el UID del usuario ftp y del grupo www-data, para ello haremos lo siguiente:</p>
<pre>
    cat /etc/passwd | grep ftp
    cat /etc/group | grep www-data
</pre>
                            <p>En el primer caso buscamos en el fichero passwd ya que buscamos a un usuario y en el otro vamos al fichero group ya que lo que buscamos es un grupo.</p>
                        </li>
                        <li>
                            <p>Ahora ya podremos crear los usuarios, para ello ejecutaremos el siguiente comando:</p>
<pre>
  sudo ftpasswd --passwd --name uftp1 --file /etc/passwd.usuarios.empresa1.com --uid 114 --gid 33 --home /var/www/html/empresa1.com/publc_html/ --shell /bin/false
  sudo ftpasswd --passwd --name uftp2 --file /etc/passwd.usuarios.empresa2.com --uid 114 --gid 33 --home /var/www/html/empresa2.com/public_html/ --shell /bin/false
</pre>
                        <p>Donde:</p>
                            <ul>
                                <li><b>--name:</b> nombre del usuario.</li>
                                <li><b>--file:</b> archivo en el que se encuentra.</li>
                                <li><b>--uid:</b> uid del usuario ftp.</li>
                                <li><b>--gid:</b> uid del grupo www-data.</li>
                                <li><b>--home:</b> home del usuario.</li>
                                <li><b>--shell:</b> shell del usuario, para que pueda o no acceder al sistema.</li>
                            </ul>
                            <p>También podemos hacer un listado del directorio /etc para comprobar que se han creado los ficheros:</p>
<pre>
    ls /etc | grep usuarios
</pre>
                        </li>
                        <li>
                            <p>Consultamos el fichero /etc/shells, y en el caso de que no exista el shell de los usuarios, tendremos que crearlo.</p>
<pre>
    /bin/sh
    /bin/dash
    /bin/bash
    /bin/rbash
    /usr/bin/tmux
    /usr/bin/screen
</pre>
                            <p>Dado que no existe, lo añadimos</p>
<pre>
    /bin/false
</pre>
                        </li>
                        <li>
                            <p>Añadimos el usuario ftp al grupo www-data, sin eliminar ninguno de los grupos anteriores.</p>
<pre>
     sudo usermod -a -G www-data ftp
</pre>
                            <p>Una vez hecho, lo comprobamos de la siguiente manera:</p>
<pre>
     cat /etc/group | grep ftp
</pre>
                        </li>
                        <li>
                            Ahora realizaremos la configuración del fichero /etc/proftp/virtuals.conf, donde configuraremos las zonas virtuales.
<pre>
    &lt;VirtualHost www.empresa1.com&gt;
        ServerName "Servidor FTP de la empresa 1"
        Port 2121
        DefaultRoot ~
        AuthUserFile /etc/passwd.usuarios.empresa1.com
    &lt;/VirtualHost&gt;
    &lt;VirtualHost www.empresa2.com&gt;
        ServerName "Servidor FTP de la empresa 2"
        Port 2122
        DefaultRoot ~
        AuthUserFile /etc/passwd.usuarios.empresa2.com
    &lt;/VirtualHost&gt;
</pre>
                        </li>
                        <li>
                            <p>Por último, accedemos a nuestro cliente FTP para comprobar que funciona: </p>
                            <img src="webroot/img/conexion1.png" class="img-responsive" alt="Conexión uftp1" style="margin-left: 8%">
                            <img src="webroot/img/conexion2.png" class="img-responsive" alt="Conexión uftp2" style="margin-left: 8%">
                        </li>
                    </ol>
                </div>
                <div id="estructura">
                    <h3>Estructura de directorios</h3>
                    <p>Para ver la estructura de directorios de nuestro sitio, podemos ejecutar el siguiente comando.</p>
<pre>
    tree -gup /var/www/html
</pre>
                    <p>Para ejecutar el comando es necesario instalar el programa.</p>
<pre>
    sudo apt-get install tree
</pre>
                    <p>El comando nos va a devolver algo como esto: </p>
                    <img src="webroot/img/tree.png" class="img-responsive" alt="Directorios" style="margin-left: 20%">
                    <br>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>
    </div>
</div>
<?php
require_once "view/pie.php";
?>
