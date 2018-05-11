<?php
/*
    * Autor: Pablo Cidón.
    * Creado: 13-02-2018.
    * Archivo: veliminarPerfil.php
    * Modificado: 13-02-2018.
*/
?>
<form name="input" action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal">
    <h3>¿Seguro que desea eliminar?</h3>
    <div class="form-group">
        <label class="control-label col-md-3" for="usuario">Código Usuario</label>
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Código Usuario" name="codUsuario" value="<?php echo $_SESSION['usuario']->getCodUsuario();?>" readonly>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-5 col-md-offset-4">
            <input type="submit" value="Sí" name="si" class="btn btn-success">
            <input type="submit" name="no" value="No" class="btn btn-danger">
        </div>
    </div>
</form>