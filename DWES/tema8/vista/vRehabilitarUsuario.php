<form name="formulario" class="form-horizontal" action="index.php?Usuario=<?php echo $_GET['Usuario'];?>&pagina=rehabilitarUsuario&numeroPagina=<?php echo $_GET['numeroPagina'];?>" method="post" style="width: 100%">
    <fieldset>
        <h4>¿Dar de baja logica el Usuario?</h4>
        <div class="form-group row">
            <!-- Material input -->
            <label for="CodDepartamento" class="control-label col-sm-2">Codigo Usuario:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="CodUsuario" value="<?php echo $usuario->getCodUsuario();//Obtenemos el código del departamento que vamos a eliminar?>" readonly>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Descripcion Usuario:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" id="alfabetico" name="DescUsuario" value="<?php echo $usuario->getDescripcion(); //Obtenemos la descripción del departamento que se va a eliminar?>" readonly>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Perfil:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-2 " id="alfabetico" name="Alta" value="<?php echo $usuario->getPerfil(); //Obtenemos la fecha en la que el departamento ha sido dado de alta.?>" readonly>

            </div>
        </div>
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Ultima Conexion:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-4" id="alfabetico" name="ultimaConexion" value="<?php echo $usuario->getUltimaConexion(); //Obtenermos el volumen de negocio del departamento?>" readonly>

            </div>
        </div>
        
        <div class="form-group row">
            <!-- Material input -->
            <label for="inputPassword3MD" class="col-sm-2 col-form-label">Numero Accesos:</label>
            <div class="col-sm-10">

                <input type="text" class="form-control col-sm-1 text-center" id="alfabetico" name="ultimaConexion" value="<?php echo $usuario->getNumeroAccesos(); //Obtenermos el volumen de negocio del departamento?>" readonly>

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
    </fieldset>
</form>