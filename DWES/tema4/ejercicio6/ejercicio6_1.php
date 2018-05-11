<!DOCTYPE html> 
<!-- 
   <!-- 
    Autor: Alejandro Pisabarro. 
    Creado: 21-03-2018. 
    Archivo: ejercicio6.php 
    Ejercicio: Pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos utilizando una consulta preparada.
--> 

<html> 
<head> 
    <link rel="shortcut icon" href="../../webroot/img/favicon.ico" /> 
    <title>PCB-DAW</title> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="../../webroot/css/bootstrap.css"> 
    <link rel="stylesheet" href="../../webroot/css/bootstrap-theme.css"> 
    <link rel="stylesheet" href="../../webroot/css/estilos.css"> 
</head> 

<body> 
<nav class="navbar navbar-inverse"> 
    <div class="container-fluid"> 
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
            </button> 
            <a href="../../../index.html"><img src="../../webroot/img/logo.png" class="img-responsive logo"></a> 

        </div> 
        <div class="collapse navbar-collapse" id="myNavbar"> 
            <ul class="nav navbar-nav"> 
                <li><a href="../../../index.html"><span class="glyphicon glyphicon-home"></span> Inicio</a></li> 
                <li><a href="../../../DAW/indexDAW.html"><span class="glyphicon glyphicon-link"></span> DAW</a></li> 
                <li class="active"><a href="../../indexDWES.html"><span class="glyphicon glyphicon-link"></span> DWES</a></li> 
                <li><a href="../../../DWEC/indexDWEC.html"><span class="glyphicon glyphicon-link"></span> DWEC</a></li> 
                <li><a href="../../../DIW/indexDIW.html"><span class="glyphicon glyphicon-link"></span> DIW</a></li> 
            </ul> 
            <ul class="nav navbar-nav navbar-right"> 
                <li class="dropdown"> 
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe"></span> Enlaces de interés<span class="caret"></span></a> 
                    <ul class="dropdown-menu"> 
                        <li><a href="https://www.w3schools.com/html/html5_intro.asp" target="_blank">HTML W3Schools</a></li> 
                        <li><a href="https://www.w3schools.com/css/" target="_blank">CSS W3Schools</a></li> 
                        <li><a href="http://php.net/" target="_blank">php.net</a></li> 
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">JavaScript MDN</a></li> 
                        <li><a href="https://www.w3schools.com/js/default.asp" target="_blank">JavaScript W3Schools</a></li> 
                        <li><a href="https://www.w3schools.com/bootstrap/" target="_blank">Bootstrap W3Schools</a></li> 
                        <li><a href="https://getbootstrap.com/" target="_blank">getbootstrap.com</a></li> 
                    </ul> 
                </li> 
            </ul> 
        </div> 
    </div> 
</nav> 
<div class="container"> 
    <h2>Ejercicio 6</h2> 
    <div class="row col-md-12 tecnologias"> 
        <?php 
        require "../conexionDB.php";//se usa un archivo externo que contiene los datos de la conexion 
            $nRegistros=0;//variable que contiene el numero de registros insertados
            try{//la conexion a la base de datos se introduce en un bloque try-catch 
                $conexion =new PDO(DATOSCONEXION, USER, PASSWORD);//se crea la conexion con los datos del archivo externo 
                $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//se establecen atributos a la conexion ATTR_ERRMODE es para el  
                for($i=0;$i<3;$i++){//se crea un bucle que se recorre tantas veces como departamentos se van a introducir
                    $arrayDepartamentos[$i]=[//se crea un array para contener los departamentos
                        'codDepartamento'=>'',
                        'descDepartamento'=>'',
                    ];
                }
                //se meten valores en el array de departamentos tanto codigo como descripcion
                $arrayDepartamentos[0]['codDepartamento']="CDA";
                $arrayDepartamentos[0]['descDepartamento']="departamentoA";
                
                $arrayDepartamentos[1]['codDepartamento']="CDB";
                $arrayDepartamentos[1]['descDepartamento']="departamentoB";
                
                $arrayDepartamentos[2]['codDepartamento']="CDC";
                $arrayDepartamentos[2]['descDepartamento']="departamentoC";
                
                
                
                //ahora se crea la consulta preparada
                $consultaP= $conexion->prepare("Insert into Departamento(codDepartamento,descDepartamento) values(:codigo,:descripcion)");
                //asignamos los parametros
                $consultaP->bindParam(":codigo",$codDepartamento);
                $consultaP->bindParam(":descripcion",$descDepartamento);
                
                //ahora recorremos el array de departamentos y ejecutamos la insercion por cada uno
                //usar foreach
                 ///foreach($arrayDepartamentos as $clave => $valor){
                  foreach($arrayDepartamentos as $valor){
                     $codDepartamento=$valor['codDepartamento'];//asignamos el valor del codigo
                     $descDepartamento=$valor['descDepartamento'];//asignamos el valor de la descripcion
                     //ejecutamos la consulta
                     $consultaP->execute();
                     //contamos el numero de registros
                     $nRegistros+=$consultaP->rowCount();
                 }
                 if($nRegistros==3){//si el numero de registros coincide con los que queriamos insertar se ha realizado correctamente
                     echo "La insercion se ha realizado con exito";                     
                 }else{
                     echo "Ha ocurrido un error en la insercion";
                 }
                
            }catch (PDOException $e){//se captura la excepcion 
                echo $e->getMessage();//se muestra el mensaje de error                 
                unset($conexion); //unset destruye una variable especificada 
            } 
        ?> 
    </div> 
</div> 
<footer> 
    <div class="container"> 
        <div class="row"> 
            <h2 class="text-center">DESARROLLO DE APLICACIONES WEB</h2> 
            <h3 class="text-center">ENTORNO DE DESARROLLO</h3> 
        </div> 
        <hr> 
        <div class="row col-md-12"> 
            <div class="col-md-10"> 
                <h4 class="text-center">© 2018 Copyright: Pablo Cidón Barrio</h4> 
            </div> 
            <div class="col-md-2"> 
                <a href="https://github.com/" target="_blank"><img src="../../webroot/img/github.png" alt="GitHub" title="Ver en GitHub" class="git"></a> 
                <a href="http://daw-usgit.sauces.local/LRA_1718/ProyectoDWES" target="_blank"><img src="../../webroot/img/gitlab.png" alt="GitLab" title="Ver en GitLab" class="git"></a> 
            </div> 
        </div> 
    </div> 
</footer> 
<!--ficheros js--> 
<script src="../../webroot/js/jquery.js"></script> 
<script src="../../webroot/js/bootstrap.min.js"></script> 
</body> 
</html>