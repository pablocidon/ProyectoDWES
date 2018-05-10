
        
        <form name="formulario" class="form-horizontal" action="index.php?pagina=borrar" method="post" style="width: 100%;">
            <fieldset>
                <br>
                <h4>¿Estas seguro que que quieres eliminar el perfil?</h4>
                <div class="form-group row">
                    <label for="usuario" class="control-label col-md-2">Usuario</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-2" id="alfabetico" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="perfil" class="control-label col-md-2">Perfil</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-2" id="alfabetico" name="codUsuario" value="<?php echo $_SESSION['usuario']->getPerfil(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="control-label col-md-2">Descipcion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="alfabetico" name="descripcion" value="<?php echo $_SESSION['usuario']->getDescripcion(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="numeroAccesos" class="control-label col-md-2">Numero accesos</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-1" id="alfabetico" name="numeroAccesos" value="<?php echo $_SESSION['usuario']->getNumeroAccesos(); ?>" readonly>
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="ultimaConexion" class="control-label col-md-2">Ultima conexion</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control col-sm-2" id="alfabetico" name="ultimaConexion" value="<?php echo $_SESSION['usuario']->getUltimaConexion(); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <div class="float-right">
                        <div class="col-md-12">
                            <input type="submit" name="enviar" class="btn btn-rounded btn-success" value="Aceptar"/>
                            <input type="submit" name="enviar" class="btn btn-rounded btn-danger" value="Cancelar"/>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>

