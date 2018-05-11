<?php
require_once "../view/cabeceraTemas.php";
?>
<div class="container">
    <div class="row col-md-12">
        <h1>CARACTERÍSTICAS DEL LENGUAJE PHP</h1>
    </div>
    <div class="row col-md-12 text-justify tecnologias">
        <table>
            <tr>
                <td><h3>1. Iniciar variables de los distintos tipos de datos básicos y mostrar los datos por pantalla.</h3></td>
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
                <td><h3>2. Inicializar y mostrar una variable heredoc.</h3></td>
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
                <td><h3>3. Mostrar en tu página index la fecha y hora actual formateada en castellano.</h3></td>
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
                <td><h3>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</h3></td>
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
                <td><h3>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp).</h3></td>
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
                <td><h3>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</h3></td>
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
                <td><h3>7. Mostrar el nombre del fichero que se está ejecutando.</h3></td>
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
                <td><h3>8. Mostrar la dirección IP del equipo desde el que estás accediendo.</h3></td>
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
                <td><h3>9. Mostrar el path donde se encuentra el fichero que se está ejecutando.</h3></td>
                <td></td>
                <td>
                    <a href="ejercicio9/ejercicio9.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                </td>
                <td></td>
                <td>
                    <a href="ejercicio9/codigo9.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                </td>
            </tr>
        </table>
        <nav class="col-md-3 col-md-offset-4">
            <ul class="pagination">
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="indexTema3pag1.php">1</a></li>
                <li><a href="indexTema3pag2.php">2</a></li>
                <li><a href="indexTema3pag3.php">3</a></li>
                <li><a href="indexTema3pag2.php">&raquo;</a></li>
            </ul>
        </nav>

    </div>
</div>
<?php
require_once "../view/pie.php";
?>