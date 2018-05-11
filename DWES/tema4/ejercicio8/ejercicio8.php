<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 8</h2>
    <div class="row col-md-12 tecnologias">
        <a href="descarga.php"  class="btn btn-link" role="button"><span class="glyphicon glyphicon-download-alt"></span> Descargar</a><br><br>
        <?php
            require "../conexionDB.php";
            $documentoXML = new DOMDocument('1.0','UTF-8');//Definimos la variable que va a contener el archivo y le establecemos la versión y el encoding
            $departamentos = $documentoXML->createElement('Departamentos');//Creamos el elemento 'Departamentos'
            $departamentos = $documentoXML->appendChild($departamentos);//Añadimos al elemento anterior los departamentos
            try{
                $conexion = new PDO(DATOSCONEXION, USER, PASSWORD);//Establecemos la conexión a la base de datos
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Establecemos los atributos para controlar los errores
                $consulta = "SELECT * FROM Departamento";//Creamos la consulta
                $sentencia = $conexion->prepare($consulta);//Preparamos la consulta
                $sentencia->execute();//Ejecutamos la consulta
                while ($registro = $sentencia->fetch(PDO::FETCH_OBJ)){//Mientras se encuentren registros:
                    $departamento = $documentoXML->createElement('Departamento');//Creamos el elementos departamento
                    $departamento = $departamentos->appendChild($departamento);//Añadimos el elemento al anterior
                    $codigo=$documentoXML->createElement('Codigo',$registro->CodDepartamento);//Creamos el elemento dentro del departamento
                    $codigo =$departamento->appendChild($codigo);//Añadimos el elemento dentro del departamento
                    $descripcion=$documentoXML->createElement('Descripcion',$registro->DescDepartamento);//Creamos el elemento descripción
                    $descripcion =$departamento->appendChild($descripcion);//Añadimos el elemento descripción al elemento departamento
                }
                $documentoXML->formatOutput = true;  //Damos formato al archivo XML, de modo que se muestre tabulado y con saltos de línea
                $documentoXML->saveXML();//Guardamos el XML
                $documentoXML->save('departamentos.xml');  //Guardamos el archivo
                highlight_file("departamentos.xml");//Remarca la sintaxis del fichero
            }catch (PDOException $e){
                print $e -> getMessage();//En caso de que salte una excepción mostraremos un mensaje
            }finally{
                unset($conexion);//Finalmente cerramos la conexión
            }
        ?>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>