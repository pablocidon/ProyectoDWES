<?php
/**
 * File  vAltaDepartamento.php
 * @author Pablo Cidón.
 *
 * Fichero que contiene la vista de las altas.
 * Fecha última revisión 16-04-2018
 */
?>
<!--
    Formulario con los campos para crear los departamentos.
    Comprobaremos que se ha rellenado el campo y si es correcto, mostraremos el contenido del mismo en el caso de que haya algún error.
-->
<h3>Alta de departamento</h3>
<form name="formularioAlta" class="" action="index.php?pagina=alta" method="post" style="width: 100%">
    <fieldset>
        <br>
        <div class="form-group row">
            <!-- Material input -->
            <label for="CodDepartamento" class="control-label col-sm-2">Codigo Departamento:</label>
            <div class="col-sm-10">
                    <input type="text" class="form-control col-sm-1" id="alfabetico" maxlength="3" name="CodDepartamento" placeholder="" <?php if(isset($_POST['CodDepartamento']) && empty($mensajeError['errorCodDepartamento'])){ echo 'value="',$_POST['CodDepartamento'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorCodDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCodDepartamento'].'</span>';} ?>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorExisteDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorExisteDepartamento'].'</span>';} ?>
            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Descripcion Departamento:</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control" id="alfabetico" maxlength="255" name="DescDepartamento" placeholder="" <?php if(isset($_POST['DescDepartamento']) && empty($mensajeError['errorDescDepartamento'])){ echo 'value="',$_POST['DescDepartamento'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDescDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorDescDepartamento'].'</span>';} ?>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorCrearDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCrearDepartamento'].'</span>';} ?>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Volumen de Negocio:</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control col-sm-2" id="float" name="Volumen" placeholder="" <?php if(isset($_POST['Volumen']) && empty($mensajeError['errorDescDepartamento'])){ echo 'value="',$_POST['Volumen'],'"';}?>>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDescDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorVolumen'].'</span>';} ?>
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorCrearDepartamento'])){echo '<span style="color:red">'.$mensajeError['errorCrearDepartamento'].'</span>';} ?>
               
            </div>
        </div>
        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-12">
                    <input type="submit" name="aceptar" class="btn btn-rounded btn-success" value="Aceptar"/>
                    <input type="submit" name="cancelar" class="btn btn-rounded btn-warning" value="Cancelar"/>
                </div>
            </div>
        </div>
    </fieldset>
</form>