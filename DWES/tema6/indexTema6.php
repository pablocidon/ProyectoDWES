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
                    <td><h3>1. Login-Logoff Multicapa.</h3></td>
                    <td style="width: 2%;"></td>
                    <td>
                        <a href="loginlogoff/index.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                    </td>
                    <td style="width: 1%;"></td>
                    <td>
                        <a href="loginlogoff/codigo.php"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                    </td>
                    <td style="width: 1%;"></td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td><h3>2. Mantenimiento de departamentos multicapa.</h3></td>
                    <td></td>
                    <td>
                        <a href="MtoDepartamentosPOO/index.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                    </td>
                    <td></td>
                    <td>
                        <a href="MtoDepartamentosPOO/index.php?pagina=codigo"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                    </td>
                    <td></td>
                    <td>
                        <a href="MtoDepartamentosPOO/doc/index.html" target="_blank"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> PHP Doc</button></a>
                    </td>
                </tr>
                <tr>
                    <td><h3>3. Mantenimiento de departamentos con control de acceso y multicapa.</h3></td>
                    <td></td>
                    <td>
                        <a href="MtoDepartamentosControlAcceso/index.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-play"> Ejecutar</span></button></a>
                    </td>
                    <td></td>
                    <td>
                        <a href="MtoDepartamentosControlAcceso/index.php?pagina=codigo"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span> Ver Código </button></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php
require_once "../view/pie.php";
?>