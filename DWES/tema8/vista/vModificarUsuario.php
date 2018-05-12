<h3>Editar Usuario</h3>
<form name="formularioAlta" class="" action="index.php?pagina=mantenimientoUsuarios&Usuario=<?php echo $_GET['CodUsuario'];?>&numeroPagina=<?php echo $_GET['numeroPagina'];?>" method="post" style="width: 100%;">
    <fieldset>
        <br>
        <div class="form-group row">
            <!-- Material input -->
            <label for="CodUsuario" class="control-label col-sm-2">Codigo Usuario:</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="CodUsuario" value="<?php echo $usuario->getCodUsuario(); //Mostramos el código del departamento que se va a editar.?>" readonly>
            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Descripcion Usuario:</label>
            <div class="col-sm-10">

                    <input type="text" class="form-control" id="alfabetico" name="DescUsuario" value="<?php if(isset($_POST['editar'])){ echo $_POST['DescUsuario'],'"';}else{ echo $usuario->getDescripcion();}//Mostramos la descripción del departamento?>">
                    <?php //si existe mensaje de error lo mostramos
                    if(isset($mensajeError['errorDescripcion'])){echo '<span style="color:red">'.$mensajeError['errorDescripcion'].'</span>';} ?>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Perfil:</label>
            <div class="col-sm-10">
<?php //preguntar aqui ?>
                <select class="form-control" id="select" name="perfil">
                    <option value="Usuario">Usuario</option> 
                    <option value="Administrador">Administrador</option> 
                </select> 
            </div>
        </div>

        <div class="form-group">
            <div class="pull-right">
                <div class="col-md-12">
                    <input type="submit" name="editar" class="btn btn-rounded btn-success" value="Aceptar"/>
                    <input type="submit" name="cancelar" class="btn btn-rounded btn-danger" value="Cancelar"/>
                </div>
            </div>
        </div>
    </fieldset>
</form>


