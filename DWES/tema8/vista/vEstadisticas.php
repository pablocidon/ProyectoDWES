<?php
/**
 * File  vMtoDepartamentos.php
 * @author Pablo Cidón.
 *
 * Fichero que contiene la vista del mantenimiento de los departamentos.
 * Fecha última revisión 16-04-2018
 */
?>
<!--
    Cargamos el fichero de jQuery, que será utlizado para activar o desactivar el botón de importar,
    dependiendo de si hay algún fichero seleccionado.
    -->
<script src="webroot/js/jquery.js"></script>
<script type="text/javascript">
    /**
     * Script utilizado para controlar que hay un fichero seleccionado y así eliminar el atributo disabled del botón de importar.
     */
    $(document).ready(function (){
        $('#importar').attr('disabled', 'disabled');//Elemento cuyo ID sea importar añadimos el atributo 'disabled'.
        $('#fichero').change(function (){//Si cambia el elemento cuyo ID sea fichero, comprobamos que su valor sea distinto a vacío, eliminaremos el atributo 'disabled' del elemento anterior.
            if ($(this).val() != ''){
                $('#importar').removeAttr('disabled');
            }
        });
    });
</script>

<!--Formulario en el que mostraremos el cuadro de búsqueda y una tabla con los resultados devueltos por la base de datos-->
<form name="formulario" class="" action="index.php?pagina=estadisticas" method="post" style="width: 100%; ">
    <fieldset>
        <h3 class="text-center">Opiniones por usuario</h3>
        <table class="table">
            <thead class="mdb-color darken-3">
            <tr class="text-white">
                <th class="text-center">Usuario</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Cuestión</th>
                <th class="text-center">Descripción</th>
                <th class="text-center">Opinion</th>
                <!-- <th class="text-center">Editar/Borrar/Baja/Rehabilitación</th>-->
            </tr>
            </thead>
            <tbody>
            <?php
            /**
             * Obtenemos los registros de la base de datos los recorremos cargándolos en una tabla.
             */
            for ($i=0;$i<count($resultados);$i++){
                echo "<tr class='table-info'>";
                echo "<td class='text-center'>".$resultados[$i]['CodUsuario']."</td>";
                echo "<td class='text-center'>".$resultados[$i]['DescUsuario']."</td>";
                echo "<td class='text-center'>".$resultados[$i]['CodCuestion']."</td>";
                echo "<td>".$resultados[$i]['DescCuestion']."</td>";
                    if($resultados[$i]['ValorOpinion']==1){
                        echo "<td class='text-center'>Sí</td>";
                    }elseif ($resultados[$i]['ValorOpinion']==0){
                        echo "<td class='text-center'>No</td>";
                    }else{
                        echo "<td class='text-center'>NS/NC</td>";
                    }
                    "</td>";
                echo "<tr>";
            }
            ?>
            </tbody>
        </table>
        <hr>
        <h3 class="text-center">Cuenta opiniones por cuestión</h3>
        <table class="table">
            <thead class="mdb-color darken-3">
            <tr class="text-white">
                <th class="text-center">Cuestion</th>
                <th class="text-center">Codigo</th>
                <th class="text-center">Orden</th>
                <th class="text-center">Cantidad</th>
                <!-- <th class="text-center">Editar/Borrar/Baja/Rehabilitación</th>-->
            </tr>
            </thead>
            <tbody>
            <?php
            /**
             * Obtenemos los registros de la base de datos los recorremos cargándolos en una tabla.
             */
            for ($i=0;$i<count($cantidadCuestiones);$i++){
                /*echo "<tr class='table-info'>";
                echo "<td class='text-center'>". $cantidadCuestion[$i]['DescCuestion'] ."</td>";
                echo "<td class='text-center'>". $cantidadCuestion[$i]['CodCuestion'] ."</td>";
                echo "<td class='text-center'>". $cantidadCuestion[$i]['NumOrden'] ."</td>";
                echo "<td class='text-center'>". $cantidadCuestion[$i]['NumRespuestasCuestion'] ."</td>";
                echo "</tr>";*/
                print_r($cantidadCuestiones[$i]);
            }
            ?>
            </tbody>
        </table>
        <div class="form-group row">
            <div class="float-right">
                <div class="col-md-12">
                    <input type="submit" name="volver" id="volver" value="Volver" class="btn btn-rounded btn-info">
                </div>
            </div>
        </div>
    </fieldset>
</form>