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
                <td><h3>1. Conexión a la base de datos con la cuenta usuario y tratamiento de errores.</h3></td>
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
                <td><h3>2. Mostrar el contenido de la tabla Departamento y el número de registros.</h3></td>
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
                <td><h3>3.  Formulario para añadir un departamento a la tabla Departamento con validación de entrada y 
                control de errores.</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio3/ejercicio3.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio3/codigo3.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>4. Formulario de búsqueda de departamentos por descripción (por una parte del campo 
                DescDepartamento)</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio4/ejercicio4.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio4/codigo4.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>5.  Pagina web que añade tres registros a nuestra tabla Departamento utilizando tres instrucciones 
                insert y una transacción, de tal forma que se añadan los tres registros o no se añada ninguno.</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio5/ejercicio5.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio5/codigo5.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>6. Pagina web que cargue registros en la tabla Departamento desde un array departamentosnuevos 
                utilizando una consulta preparada.</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio6/ejercicio6.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio6/codigo6.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>7. Página web que toma datos (código y descripción) de un fichero xml y los añade a la tabla 
                Departamento de nuestra base de datos. (IMPORTAR)</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio7/ejercicio7.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio7/codigo7.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>Ejercicio 7 BIS</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio7/ejercicio7_2.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio7/codigo7_2.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>8. Página web que toma datos (código y descripción) de la tabla Departamento y guarda en un
                fichero departamento.xml. (COPIA DE SEGURIDAD / EXPORTAR)</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio8/ejercicio8.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio8/codigo8.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>9. Aplicación resumen MtoDeDepartamentos. (Incluir PHPDoc y versionado en el repositorio GIT)</h3></td>
                <td></td>
                <td>
                    <a href="../../wip.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="../../wip.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
            <tr>
                <td><h3>10. Aplicación resumen MtoDeDepartamentos POO y multicapa.</h3></td>
                <td style="width: 2%;"></td>
                <td>
                    <a href="../../wip.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td style="width: 1%;"></td>
                <td>
                    <a href="../../wip.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
           
        </table>
       

    </div>
</div>
<?php
require_once "../view/pie.php";
?>