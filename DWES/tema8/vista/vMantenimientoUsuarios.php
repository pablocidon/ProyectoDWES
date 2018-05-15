<?php
/**
 * File  vMantenimientoUsuarios.php
 * @author Lucía.
 *
 * Fichero que contiene la vista del mantenimiento de los departamentos.
 * Fecha última revisión 09-05-2018
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

<h3 class="text-center">Mantenimiento de Usuarios</h3>

<!--Formulario en el que mostraremos el cuadro de búsqueda y una tabla con los resultados devueltos por la base de datos-->
<form name="formulario" class="" action="index.php?pagina=mantenimientoUsuarios" method="post" style="width: 100%; ">
    <fieldset>
        <div class="row">
            <a href="index.php?pagina=inicio" class="text-white"><button type="button" class="btn btn-primary"><i class="fa fa-home"></i> Inicio</button></a>
            <a href="index.php?pagina=crearUsuario" class="text-white"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo</button></a>
            <a href="index.php?pagina=wip" class="text-white" title="Descarga de todos los departamentos"><button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Copia de Seguridad</button></a>
            <input type="submit" class="btn btn-primary" id="importar" name="importar" value="importar">

            <input type="file" class="form-control-file col-md-4" id="fichero" name="fichero" accept="text/xml">
        </div>
        <br>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Descripcion Usuario:</label>
            <div class="col-sm-8">

                <input type="text" class="form-control" id="alfabetico" name="DescUsuario"
                       placeholder="" <?php if (isset($_SESSION['criterioBusqueda'])){
                    echo 'value="', $_SESSION['criterioBusqueda'], '"';
                } ?>>

            </div>
            <div class="col-sm-2">
                <div class="float-right">
                    <input type="submit" name="buscar" class="btn btn-rounded btn-default" value="Buscar"/>
                </div>
            </div>
        </div>


        <table class="table">
            <thead class="mdb-color darken-3">
            <tr class="text-white">
                <th class="text-center">Codigo</th>
                <th>Descripcion</th>
                <th>Perfil</th>
                <th>Fecha de Baja</th>
                <th class="text-center">Editar/Borrar</th>
            </tr>
            </thead>
            <tbody>
            <?php
            /**
             * Obtenemos los registros de la base de datos los recorremos cargándolos en una tabla.
             */
            for ($i=0;$i<count($usuarios);$i++){
               
                    echo "<tr class='table-info'>";
                    echo "<td class='text-center'>". $usuarios[$i]->getCodUsuario() ."</td>";
                    echo "<td>". $usuarios[$i]->getDescripcion() ."</td>";
                    echo "<td>". $usuarios[$i]->getPerfil() ."</td>";
                    echo "<td>". $usuarios[$i]->getFechaBajaUsuario() ."</td>";
                    echo '<td class="text-center"><a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=modificarUsuario" title="Editar Usuario"><i class="fa fa-pencil"></i> </a>/ 
                        <a href="index.php?Usuario='.$usuarios[$i]->getCodUsuario().'&numeroPagina='.$_GET['numeroPagina'].'&pagina=bajaLogicaUsuario" title="Eliminar usuario"><i class="fa fa-trash"></i> </a>/
                        </td>';//Creamos los enlaces a las ventanas de eliminar y editar, pasando como uno de los parámetro el código del departamento seleccionado
                    echo "</tr>";
                
            }
            ?>
            </tbody>
        </table>

        <div class="row">
            <div class="col"></div>
            <div class="col">
                <nav aria-label="pagination example">
                    <ul class="pagination pg-blue mb-0">
                        <?php
                        if($_GET['numeroPagina']==1){
                            ?>
                            <li class="page-item disabled"><a class="page-link">&laquo;</a></li>

                            <li class="page-item active"><a class="page-link"><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item <?php if($numeroPaginas==1 || $numeroPaginas==0){echo 'disabled';}?>"><a class="page-link" href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']+1;?>&pagina=mantenimientoUsuarios">&raquo;</a></li>
                            <?php
                        }elseif ($_GET['numeroPagina']<$numeroPaginas){
                            ?>
                            <li class="page-item"><a class="page-link"href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']-1;?>&pagina=mantenimientoUsuarios">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href=""><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item"><a class="page-link"href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']+1;?>&pagina=mantenimientoUsuarios">&raquo;</a></li>
                            <?php
                        }elseif ($_GET['numeroPagina']==$numeroPaginas){
                            ?>
                            <li class="page-item"><a class="page-link" href="index.php?numeroPagina=<?php echo $_GET['numeroPagina']-1;?>&pagina=mantenimientoUsuarios">&laquo;</a></li>
                            <li class="page-item active"><a class="page-link" href=""><?php echo $_GET['numeroPagina'].' de '.$numeroPaginas;?></a></li>
                            <li class="page-item disabled"><a class="page-link" href="">&raquo;</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="col"></div>
        </div>
    </fieldset>
</form>





