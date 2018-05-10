<?php
/**
 * File  vEliminarDepartamento.php
 * @author Pablo Cidón.
 *
 * Fichero que contiene la vista del departamento que se va a eliminar.
 * Fecha última revisión 16-04-2018
 */
?>
<form class="form-horizontal" id="formulario" name="FormularioEliminar" action="index.php?pagina=eliminar&Departamento=<?php echo $_GET['Departamento'];?>" method="post" style="width: 100%">
    <h3>¿Seguro que desea eliminar?</h3>
    <div class="form-group row">
        <!-- Material input -->
        <label for="CodDepartamento" class="control-label col-sm-2">Codigo Departamento:</label>
        <div class="col-sm-10">

                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="CodDepartamento" value="<?php echo $departamento->getCodDepartamento(); //Obtenemos el código del departamento que vamos a eliminar?>" readonly>

        </div>
    </div>
    <div class="form-group row">
        <!-- Material input -->
        <label for="inputPassword3MD" class="col-sm-2 col-form-label">Descripcion Departamento:</label>
        <div class="col-sm-10">

               <input type="text" class="form-control" id="alfabetico" name="DescDepartamento" value="<?php echo $departamento->getDescDepartamento(); //Obtenemos la descripción del departamento que se va a eliminar?>" readonly>

        </div>
    </div>
    <div class="form-group row">
        <!-- Material input -->
        <label for="inputPassword3MD" class="col-sm-2 col-form-label">Fecha de alta:</label>
        <div class="col-sm-10">

                <input type="text" class="form-control col-sm-2 text-center" id="alfabetico" name="Alta" value="<?php echo $departamento->getFechaAltaDepartamento(); //Obtenemos la fecha en la que el departamento ha sido dado de alta.?>" readonly>

        </div>
    </div>
    <div class="form-group row">
        <!-- Material input -->
        <label for="inputPassword3MD" class="col-sm-2 col-form-label">Volumen de Negocio:</label>
        <div class="col-sm-10">

                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="Volumen" value="<?php echo $departamento->getVolumenDeNegocio(); //Obtenermos el volumen de negocio del departamento?>" readonly>

        </div>
    </div>
    <div class="form-group row">
        <!-- Material input -->
        <label for="inputPassword3MD" class="col-sm-2 col-form-label">Fecha de Baja:</label>
        <div class="col-sm-10">

                <input type="text" class="form-control col-sm-2 text-center" id="alfabetico" name="Baja" value="<?php echo $departamento->getFechaBajaDepartamento(); //Obtenemos la fecha en la que el departamento será dado de baja?>" readonly>

        </div>
    </div>
    <div class="form-group">
        <div class="pull-right">
            <div class="col-md-12">
                <input type="submit" name="si" class="btn btn-rounded btn-success" value="Aceptar"/>
                <input type="submit" name="no" class="btn btn-rounded btn-danger" value="Cancelar"/>
            </div>
        </div>
    </div>
</form>