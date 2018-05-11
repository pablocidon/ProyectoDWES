<?php
/**
 * File  vModificarDepartamento.php
 * @author Pablo Cidón.
 *
 * Fichero que contiene la vista del departamento que se va a modificar.
 * Fecha última revisión 16-04-2018
 */
?>
<h3>Editar departamento</h3>
<form name="formularioAlta" class="form-horizontal" action="index.php?pagina=modificar&Departamento=<?php echo $_GET['Departamento'];?>" method="post">
    <fieldset>
        <br>
        <div class="form-group">
            <label for="CodDepartamento" class="control-label col-md-3">Codigo Departamento:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="alfabetico" name="CodDepartamento" value="<?php echo $departamento->getCodDepartamento(); //Mostramos el código del departamento que se va a editar.?>" readonly>
                <?php //si existe mensaje de error lo mostramos
                if(isset($mensajeError['errorCodDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCodDepartamento'].'</span>';} ?>
            </div>
        </div>
        <div class="form-group">
            <label for="DescDepartamento" class="control-label col-md-3">Descripcion Departamento:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="alfabetico" name="DescDepartamento" value="<?php if(isset($_POST['editar'])){ echo $_POST['DescDepartamento'],'"';}else{ echo $departamento->getDescDepartamento();}//Mostramos la descripción del departamento?>">
                <?php //si existe mensaje de error lo mostramos
                if(isset($mensajeError['errorDescDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorDescDepartamento'].'</span>';} ?>
            </div>
        </div>
        <div class="form-group">
            <label for="Volumen" class="control-label col-md-3">Volumen de Negocio:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="float" name="Volumen" placeholder="" value="<?php if(isset($_POST['editar'])){ echo $_POST['Volumen'],'"';}else{ echo $departamento->getVolumenDeNegocio();}//Mostramos el volumen de negocio del departamento?>">
                <?php //si existe mensaje de error lo mostramos
                if(isset($mensajeError['errorVolumen'])){echo '<span style="color:red">'.$mensajeError['errorVolumen'].'</span>';} ?>
            </div>
        </div>

        <div class="form-group">
            <label for="alta" class="control-label col-md-3">Fecha de alta:</label>
            <div class="col-md-9">
                <input type="text" class="form-control" id="float" name="FechaAlta" placeholder="" value="<?php if(isset($_POST['editar'])){ echo $_POST['Volumen'],'"';}else{ echo $departamento->getFechaAltaDepartamento();}//Mostramos la fecha en la que el departamento ha sido creado?>" readonly>
                <?php //si existe mensaje de error lo mostramos
                if(isset($mensajeError['errorModificar'])){echo '<span style="color:red">'.$mensajeError['errorModificar'].'</span>';} ?>
            </div>
        </div>

        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-12">
                    <input type="submit" name="editar" class="btn btn-primary" value="Guardar Cambios"/>
                    <input type="submit" name="cancelar" class="btn btn-warning" value="Cancelar"/>
                </div>
            </div>
        </div>
    </fieldset>
</form>
