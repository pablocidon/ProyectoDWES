<?php
/**
 * Http Request information
 *
 * This class provides information about the request: parameters, path, url,
 * cookies,...
 *
 *  LICENCE
 *  ========
 *	copyright (c) 2000 Patxi Echarte [patxi@eslomas.com]
 *
 *	This program is free software; you can redistribute it and/or
 *	modify it under the terms of the GNU Lesser General Public License
 *	version 2.1 as published by the Free Software Foundation.
 *
 *	This library is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Lesser General Public License for more details at
 *	http://www.gnu.org/copyleft/lgpl.html
 *
 *	You should have received a copy of the GNU General Public License
 *	along with this program; if not, write to the Free Software
 *	Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * @package HttpRequest
 * @version $Id: HttpRequest.class.php,v 1.2 2005/06/07 $
 * @author Patxi Echarte <patxi@eslomas.com>
 */

class HttpRequest
{

    /**
     * Matriz de cadenas con los tipos MIME aceptados por el cliente
     *
     * @var     matrix
     * @access  public
     */
    var $acceptTypes = array();

    /**
     * Matriz de cadenas con los lenguajes aceptados por el cliente
     *
     * @var     matrix
     * @access  public
     */
    var $acceptLanguages = array();

    /**
     * Matriz de cadenas con los conjuntos de caracteres aceptados por el cliente
     *
     * @var     matrix
     * @access  public
     */
    var $acceptCharsets = array();

    /**
     * Información del browser del cliente
     *
     * @var     string
     * @access  public
     */
    var $browser = '';

    /**
     * Método de transferencia de datos HTTP utilizado por el cliente
     *
     * @var     string
     * @access  public
     */
    var $httpMethod = '';

    /**
     * Indica si el cliente está autenticado en el servidor
     *
     * @var     boolean
     * @access  public
     */
    var $isAuthenticated = false;

    /**
     * Indica el nombre del usuario. Este es el dato proporcionado por el usuario, pero
     * no es suficiente pasa saber si está autenticado. Si isAuthenticated es true será válido
     * porque estará autenticado contra el servidor, pero si es false, la autenticación se
     * deberá realizar en la aplicación.
     *
     * @var     string
     * @access  public
     */
    var $authenticationUser = '';

    /**
     * Indica la contraseña del usuario
     *
     * @var     string
     * @access  public
     */
    var $authenticationPass = '';

    /**
     * Indica si la conexión utiliza https
     *
     * @var     boolean
     * @access  public
     */
    var $isSecureConnection = false;

    /**
     * Ruta absoluta donde está ubicado el web (DOCUMENT_ROOT)
     *
     * @var     string
     * @access  public
     */
    var $applicationPath = '';

    /**
     * Ruta completa del script que se ha solicitado (PATH_TRANSLATED)
     *
     * @var     string
     * @access  public
     */
    var $absoluteFilePath = '';

    /**
     * Path del script solicitado a partir de la ruta del servidor web (PHP_SELF)
     *
     * @var     string
     * @access  public
     */
    var $filePath = '';

    /**
     * nombre del script solicitado
     *
     * @var     string
     * @access  public
     */
    var $file = '';

    /**
     * solicitud URL original (REQUEST_URI)
     *
     * @var     string
     * @access  public
     */
    var $rawUrl = '';

    /**
     * variables enviadas por _GET
     *
     * @var     array
     * @access  public
     */
    var $queryString = array();

    /**
     * variables enviadas por _POST
     *
     * @var     array
     * @access  public
     */
    var $form = array();

    /**
     * Matriz de cookies disponibles en el cliente
     *
     * @var     matrix
     * @access  public
     */
    var $cookies = array();

    /**
     * variables del servidor
     *
     * @var     array
     * @access  public
     */
    var $serverVariables = array();

    /**
     * solicitud anterior del cliente
     *
     * @var     string
     * @access  public
     */
    var $urlReferrer = '';

    /**
     * dirección IP del servidor
     *
     * @var     string
     * @access  public
     */
    var $hostAddress = '';

    /**
     * nombre del servidor
     *
     * @var     string
     * @access  public
     */
    var $hostName = '';

    /**
     * ip real del cliente
     *
     * @var     string
     * @access  public
     */
    var $remoteAddr = '';

    /**
     * fecha y hora de la petición
     *
     * @var     string
     * @access  public
     */
    var $datetime = '';

    /**
     * fecha de la petición
     *
     * @var     string
     * @access  public
     */
    var $date = '';

    /**
     * hora de la petición
     *
     * @var     string
     * @access  public
     */
    var $time = '';

    /**
     * Constructor
     *
     * @access public
     */
    function HttpRequest()
    {

        $this->acceptTypes = $this->_parseAcceptTypes();
        $this->acceptLanguages = $this->_parseAcceptLanguages();
        $this->acceptCharsets = $this->_parseAcceptCharsets();

        $this->browser = $_SERVER['HTTP_USER_AGENT'];

        $this->applicationPath = $_SERVER['DOCUMENT_ROOT'];
        $this->absoluteFilePath = $_SERVER['SCRIPT_FILENAME'];
        $this->filePath = $_SERVER['PHP_SELF'];
        $this->file = basename($_SERVER['PHP_SELF']);

        $this->httpMethod = $_SERVER['REQUEST_METHOD'];

        $this->isAuthenticated = isset($_SERVER['REMOTE_USER']);
        $this->authenticationUser = $_SERVER['PHP_AUTH_USER'];
        $this->authenticationPass = $_SERVER['PHP_AUTH_PW'];

        $this->isSecureConnection = $_SERVER['HTTPS'] == 'on';

        // Fix for IIS, which doesn't set REQUEST_URI
        if (!isset($_SERVER['REQUEST_URI'])) {
            $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];

            // Append the query string if it exists and isn't null
            if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])) {
                $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
            }
        }
        $this->rawUrl = $_SERVER['REQUEST_URI'];

        // para prevenir problemas con magic quotes, en caso de que esté activo
        // en el servidor lo desactivamos para este script y arreglamos la información
        // GET, POST y COOKIE, para guardarla en esta clase. No se toca la información
        // de esas matrices para no interferir con otras aplicaciones
        set_magic_quotes_runtime(0);
        $this->queryString =& $this->_fixMagicQuotes($_GET);
        $this->form =& $this->_fixMagicQuotes($_POST);
        $this->cookies =& $this->_fixMagicQuotes($_COOKIE);

        $this->serverVariables = $_SERVER;

        $this->urlReferrer = $_SERVER['HTTP_REFERER'];

        $this->hostAddress = $_SERVER['SERVER_ADDR'];
        $this->hostName = $_SERVER['HTTP_HOST'];

        $this->remoteAddr = $this->_getRealIP();

        $time = time();
        $this->datetime = date("Y-m-d H:i:s", $time);
        $this->date = date("Y-m-d", $time);
        $this->time = date("H:i:s", $time);

    }

    function& _fixMagicQuotes($data)
    {
        if (get_magic_quotes_gpc() == 1) {
            if (is_array($data))
                return array_map(array(&$this, '_fixMagicQuotes'), $data);
            else
                return stripslashes($data);
        } else return $data;
    }

    function _parseAcceptTypes()
    {
        $http_accept_types = explode(',', $_SERVER['HTTP_ACCEPT']);
        foreach ($http_accept_types as $http_accept_type) {
            preg_match("!([^;]+)(?:;q=(\d\.\d\d?))?!", $http_accept_type, $matches);
            $accept_types[] = $matches[1];
        }
        return $accept_types;
    }

    function _parseAcceptLanguages()
    {
        $http_accept_languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        foreach ($http_accept_languages as $http_accept_language) {
            preg_match("!([a-z]{2}(?:-[a-zA-Z]{2})?)(?:;q=(\d\.\d\d?))?!", $http_accept_language, $matches);
            if ('' == $matches[2]) $matches[2] = '1.0';
            // Make sure Alpha-2 code is capitalized
            $matches[1] = preg_replace('!([a-z]{2}-)([a-z]{2})!e', "'$1' . strtoupper('$2')", $matches[1]);
            $accept_languages[(string)(int)((float)$matches[2] * 100)] = $matches[1];
        }
        krsort($accept_languages);
        $accept_languages = array_values($accept_languages);
        return $accept_languages;
    }

    function _parseAcceptCharsets()
    {
        $http_accept_charsets = explode(',', $_SERVER['HTTP_ACCEPT_CHARSET']);
        foreach ($http_accept_charsets as $http_accept_charset) {
            preg_match("!([^;]+)(?:;q=(\d\.\d\d?))?!", $http_accept_charset, $matches);
            $accept_charsets[] = $matches[1];
        }
        return $accept_charsets;
    }

    function _getRealIP()
    {

        if ($_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
            $client_ip =
                (!empty($_SERVER['REMOTE_ADDR'])) ?
                    $_SERVER['REMOTE_ADDR']
                    :
                    ((!empty($_ENV['REMOTE_ADDR'])) ?
                        $_ENV['REMOTE_ADDR']
                        :
                        "unknown");

            // los proxys van añadiendo al final de esta cabecera
            // las direcciones ip que van "ocultando". Para localizar la ip real
            // del usuario se comienza a mirar por el principio hasta encontrar
            // una dirección ip que no sea del rango privado. En caso de no
            // encontrarse ninguna se toma como valor el REMOTE_ADDR

            $entries = split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);

            reset($entries);
            while (list(, $entry) = each($entries)) {
                $entry = trim($entry);
                if (preg_match("/^([0-9]+.[0-9]+.[0-9]+.[0-9]+)/", $entry, $ip_list)) {
                    // http://www.faqs.org/rfcs/rfc1918.html
                    $private_ip = array(
                        '/^0./',
                        '/^127.0.0.1/',
                        '/^192.168..*/',
                        '/^172.((1[6-9])|(2[0-9])|(3[0-1]))..*/',
                        '/^10..*/');

                    $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

                    if ($client_ip != $found_ip) {
                        $client_ip = $found_ip;
                        break;
                    }
                }
            }
        } else {
            $client_ip =
                (!empty($_SERVER['REMOTE_ADDR'])) ?
                    $_SERVER['REMOTE_ADDR']
                    :
                    ((!empty($_ENV['REMOTE_ADDR'])) ?
                        $_ENV['REMOTE_ADDR']
                        :
                        "unknown");
        }

        return $client_ip;

    }
}
?>