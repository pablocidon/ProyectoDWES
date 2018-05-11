<?php
require_once "../../view/cabeceraEjercicios.php";
?>
<div class="container">
    <h2>Ejercicio 20</h2>
    <div class="row col-md-12 tecnologias">
        <form name="formulario" class="form-horizontal" action="tratamiento.php" method="post">
            <fieldset>
                <br>
                <div class="form-group">
                    <label for="nombre" class="control-label col-md-2">Nombre:</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edad" class="control-label col-md-2">Edad:</label>
                    <div class="col-md-10">
                        <input type="number" class="form-control" id="edad" name="edad" placeholder="0">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="nacimiento">Fecha de nacimiento:</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control" id="nacimiento" name="nacimiento">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="correo">Correo:</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo:">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="mensaje">Mensaje:</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribe tu mensaje:"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="valoracion">Valoración:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="mucho">Mucho
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="poco">Poco
                        </label>
                        <label class="checkbox-inline">
                            <input type="radio" name="valoracion" id="valoracion" value="nada">Nada
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="redsocial">Redes Sociales:</label>
                    <div class="col-md-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="twitter">Twitter
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="facebook">Facebook
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="redsocial[]" id="redsocial" value="instagram">Instagram
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        <button class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
require_once "../../view/pie.php";
?>