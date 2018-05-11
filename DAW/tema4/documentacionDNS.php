<?php
require_once "view/cabecera.php";
?>
<div class="container">
    <h1>SERVICIO DE RESOLUCIÓN DE NOMBRES</h1>
    <div class="col-md-12 tecnologias ">
        <div class="row">
            <h1>Instalación y configuración de bind9</h1>
            <div class="col-md-2">
                <dl>
                    <dt><a href="#bind9">Bind9</a></dt>
                    <dd><a href="#usoBind9">Utilización</a></dd>
                    <dd><a href="#instalacionBind9">Instalación</a></dd>
                    <dd><a href="#configuracionBind9">Configuración</a></dd>
                    <dd><a href="#estadoBind9">Servicio</a></dd>
                    <dd><a href="#mtoBind9">Mantenimiento</a></dd>
                </dl>
            </div>
            <div class="col-md-10">
                <div id="bind9">
                    <h2>Bind9</h2>
                </div>
                <div id="usoBind9">
                    <h3>Utilización de Bind9</h3>
                    <p>
                        BIND (Berkeley Internet Name Domain, anteriormente: Berkeley Internet Name Daemon)
                        es el servidor de DNS más comúnmente usado en Internet,1​2​ especialmente en sistemas Unix,
                        en los cuales es un Estándar de facto. Es patrocinado por la Internet Systems Consortium.
                        BIND fue creado originalmente por cuatro estudiantes de grado en la University of California,
                        Berkeley y liberado por primera vez en el 4.3BSD. Paul Vixie comenzó a mantenerlo en 1988 mientras
                        trabajaba para la DEC.
                    </p>
                </div>
                <div id="instalacionBind9">
                    <h3>Instalación de Bind9</h3>
                    <p>
                       En primer lugar realizaremos la actualización del repositorio de aplicaciones de ubuntu. Para ello ejecutaremos el siguiente comando:
                    </p>
<pre>
    sudo apt-get update
</pre>
                    <p>Una vez actualizado, procederemos a la instalación de Bind, para ello ejecutaremos el siguiente comando:</p>
<pre>
    sudo apt-get install bind9
</pre>
                </div>
                <div id="configuracionBind9">
                    <h3>Configuración de Bind9</h3>
                    <p>Una vez instalado, configuraremos nuestro servidor DNS, para ello iremos al fichero /etc/bind/named.conf.local.</p>
<pre>
    sudo nano /etc/bind/named.conf.local
</pre>
                    <p>Donde añadiremos las siguientes líneas:</p>
<pre>
    //Zona de resolución directa
    zone "infoSauces11.local" {
    type master;
    file "/etc/bind/db.infoSauces11.local";
    };
    //Zona de resolución inversa
    zone "3.168.192.in-addr.arpa"{
    type master;
    file /etc/bind/db.3.168.192.in-addr.arpa";
    };
</pre>
                    <p>Al finalizar chequearemos el fichero:</p>
<pre>
    sudo nano /etc/bind/named.conf.local
</pre>
                    <p>Si no da errores reiniciaremos el servicio. <a href="#estadoBind9">Ver comandos del servicio</a></p>
                    <h4>Configuración de la zona de resolución de nombres directa</h4>
                    <p>
                        Ahora procederemos a la configuración de la zona de resolución de nombres directa. Para ello partiremos del fichero
                        /etc/bind/db.0, del que tendremos que hacer una copia:
                    </p>
<pre>
    sudo cp /etc/bind/db.0 /etc/bind/db.infoSauces11.local
</pre>
                    <p>Una vez copiado, editaremos el fichero:</p>
<pre>
    sudo nano /etc/bind/db.infoSauces11.local
</pre>
                    <p>Al abrir el fichero nos mostrará así:</p>
<pre>
    ; BIND reverse data file for broadcast zone
    ;
    $TTL    604800
    @       IN      SOA     localhost. root.localhost. (
                                  1         ; Serial
                             604800         ; Refresh
                              86400         ; Retry
                            2419200         ; Expire
                             604800 )       ; Negative Cache TTL
    ;
    @       IN      NS      localhost.
</pre>
                    <p>Tendremos que editarlo de forma que nos quede así:</p>
<pre>
    ;
    ; BIND data file for infoSauces11.local zone
    ;
    $TTL    604800
    @       IN      SOA     PCB-USED.infoSauces11.local. root.localhost. (
                                  1         ; Serial
                             604800         ; Refresh
                              86400         ; Retry
                            2419200         ; Expire
                             604800 )       ; Negative Cache TTL
    ;
    @       IN      NS      PCB-USED.infoSauces11.local.
    @       IN      A       192.168.3.111
    PCB-USED IN     A       192.168.3.111
    IS32WX11 IN     A       192.168.3.11
    www     IN      CNAME   PCB-USED.infoSauces11.local.
    ftp     IN      CNAME   PCB-USED.infoSauces11.local.
</pre>
                    <p>A continuación chequearemos el fichero para comprobar que todo está correctamente:</p>
<pre>
    sudo named-checkzone infoSauces11.local /etc/bind/db.infoSauces11.local
</pre>
                    <h4>Configuración de la zona de resolución de nombres inversa</h4>
                    <p>
                        Ahora procederemos a realizar la configuración de la zona de resolución de nombres inversa.
                        Para ello partiremos del fichero /etc/bind/db.0, por lo que realizaremos una copia del mismo:
                    </p>
<pre>
    sudo cp /etc/bind/db.0 /etc/bind/db.3.168.192.in-addr.arpa
</pre>
                    <p>Una vez copiado, editaremos el fichero:</p>
<pre>
    sudo nano /etc/bind/db.3.168.192.in-addr.arpa
</pre>
                    <p>Al abrir el fichero nos mostrará así:</p>
<pre>
    ; BIND reverse data file for broadcast zone
    ;
    $TTL    604800
    @       IN      SOA     localhost. root.localhost. (
                                  1         ; Serial
                             604800         ; Refresh
                              86400         ; Retry
                            2419200         ; Expire
                             604800 )       ; Negative Cache TTL
    ;
    @       IN      NS      localhost.
</pre>
                    <p>Tendremos que editarlo de forma que nos quede así:</p>
<pre>
    ;
    ; BIND reverse data file for 3.168.192.in-addr.arpa zone
    ;
    $TTL    604800
    @       IN      SOA     PCB-USED.infoSauces11.local. root.localhost. (
                                  1         ; Serial
                             604800         ; Refresh
                              86400         ; Retry
                            2419200         ; Expire
                             604800 )       ; Negative Cache TTL
    ;
    @       IN      NS      PCB-USED.infoSauces11.local.
    111     IN      PTR     infoSauces11.local.
    111     IN      PTR     PCB-USED.infoSauces11.local.
    11      IN      PTR     IS32WX11.infoSauces11.local.
</pre>
                    <p>A continuación chequearemos el fichero para comprobar que todo está correctamente:</p>
<pre>
    sudo named-checkzone 3.168.192.in-addr.arpa /etc/bind/db.3.168.192.in-addr.arpa
</pre>
                    <p>Si no da errores reiniciaremos el servicio. <a href="#estadoBind9">Ver comandos del servicio</a></p>
                    <h4>Configuración de reenviadores</h4>
                    <p>
                        Ahora vamos a realizar la configuración de los reenviadores.
                        Que consiste en el envio a otro servidor DNS de la pregunta en el caso de que no sea capaz de resolverla.
                    </p>
                    <p>Para ello editaremos el siguiente fichero:</p>
<pre>
    sudo nano /etc/bind/named.conf.options
</pre>
                    <p>Nos aparecerán de tal modo:</p>
<pre>
    // forwarders {
        //      0.0.0.0;
    // };
</pre>
                    <p>Los descomentamos de forma que nos queden de tal modo:</p>
<pre>
    forwarders {
        8.8.8.8;
    };
</pre>
                    <p>Finalmente reiniciaremos el servicio de bind9 <a href="#estadoBind9">Ver comandos del servicio</a></p>
                    <h4>Configuración de red del servidor</h4>
                    <p>Vamos al fichero /etc/network/interfaces:</p>
<pre>
    sudo nano /etc/network/interfaces
</pre>
                    <p>Nuestra configuración de red se encuentra de la siquiente forma:</p>
<pre>
    iface enp0s3 inet static
        address 192.168.3.111
        netmask 255.255.255.0
        gateway 192.168.3.1
        dns-nameservers 192.168.20.20
</pre>
                    <p>Tendremos que modificarla de la siguiente forma:</p>
<pre>
    iface enp0s3 inet static
        address 192.168.3.111
        netmask 255.255.255.0
        gateway 192.168.3.1
        dns-nameservers 192.168.3.111
        dns-domain infoSauces11.local
</pre>
                    <p>Finalmente, reiniciaremos el servidor:</p>
<pre>
    sudo reboot now
</pre>
                    <p>Una vez reiniciado, comprobaremos el fichero /etc/resolv.conf</p>
<pre>
    cat /etc/resolv.conf
</pre>
                    <p>Si nos devuelve algo así, es que todo está correctamente.</p>
<pre>
    nameserver 192.168.3.111
    search infoSauces11.local
</pre>
                </div>
                <div id="estadoBind9">
                    <h3>Servicio Bind9</h3>
                    <p>Reiniciar el servicio de Bind9:</p>
<pre>
    sudo service bind9 restart
</pre>
                    <p>Comprobar el servicio de bind9:</p>
<pre>
    sudo service bind9 status
</pre>
                    <p>Nos mostrará algo como esto:</p>
                    <img src="images/serviceStatus.PNG" class="img-responsive" alt="Estado Bind" style="margin-left: 15%">
                    <p>Arrancar el servicio bind9:</p>
<pre>
    sudo service bind9 start
</pre>
                    <p>Parar el servicio bind9:</p>
<pre>
    sudo service bind9 stop
</pre>
                </div>
                <div id="mtoBind9">
                    <h3>Mantenimiento de Bind9</h3>
                    <p>Para comprobar que todo está correctamente y funciona, ejecutaremos el siguiente comando comprobando los distintos registros:</p>
                    <img src="images/nslookup.PNG" alt="nslookup" class="img-responsive" style="margin-left: 15%">
                    <p>Si queremos que nuestro equipo sea cliente de este DNS, tendremos que cambiar el DNS de nuestro equipo, para ello iremos a configuración de red.</p>
                    <p>Una vez cambiada, comprobaremos que funciona de la siguiente manera:</p>
                    <ol>
                        <li>
                            Introduciendo uno de los nombres en el navegador, tambien lo haremos con los alias:
<pre>
    http://infosauces11.local/
    http://www.infosauces11.local/
    http://ftp.infosauces11.local/
</pre>
                        </li>
                        <li>
                            También lo haremos en modo comando de la siguiente forma:
                            <img src="images/nslookupWX.PNG" class="img-responsive" alt="NSLookUp" style="margin-left: 15%">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>
    </div>
</div>
<?php
require_once "view/pie.php";
?>
