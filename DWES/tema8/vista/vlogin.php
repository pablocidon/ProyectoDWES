<?php
    //require_once "../view/cabeceraEjercicios.php";
?>
<script src="webroot/js/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(document).ready(function () {
            $('#show-pass').mousedown(function () {
                if ($('#password').attr('type') === 'text') {
                    $('#password').attr('type', 'password');
                } else {
                    $('#password').attr('type', 'text');
                }
            });
        });
    });
</script>

<div class="row col-md-12">
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%;">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li>
            <li data-target="#carousel-example-2" data-slide-to="4"></li>
            <li data-target="#carousel-example-2" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100 img-fluid" src="webroot/img/180503ArbolDeNavegacion.jpg" alt="First slide">
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive" style="color: black">Arbol de Navegación</h3>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100 img-fluid" src="webroot/img/180503CasosDeUso.jpg" alt="Second slide">
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive" style="color: black;">Casos de uso</h3>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100 img-fluid" src="webroot/img/180503DiagramaDeClases.jpg" alt="Third slide">
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive" style="color: black;">Diagrama de clases</h3>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100 img-fluid" src="webroot/img/180503ModeloFisicoDeDatos.jpg" alt="First slide">
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive" style="color: black">Modelo Fisico de Datos</h3>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100 img-fluid" src="webroot/img/180503RelacionDeFicheros.jpg" alt="Second slide">
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive" style="color: black;">Relación de Ficheros</h3>
                </div>
            </div>
            <div class="carousel-item">
                <div class="view">
                    <img class="d-block w-100 img-fluid" src="webroot/img/EstructuraDeAlmacenamiento.JPG" alt="Third slide">
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive" style="color: black;">Estructura De Almacenamiento</h3>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>

<?php
//require_once "../view/pie.php";
?>
