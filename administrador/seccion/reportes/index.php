<?php include("../../template/cabecera.php");

?>
<br>
<br>
<div class="container-fluid mt-2">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-info d-none d-lg-block">
                <div class="panel panel-heading text-center mb-2">
                   <h2>Ventas y pagos a proveedores (diario)</h2>
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div id="cargaLineal">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="cargaBarras">

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>







<script src="librerias/jquery-3.7.0.min.js"></script>
<script src="librerias/plotly.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $('#cargaLineal').load('lineal.php');
        $('#cargaBarras').load('barras.php');
    });
</script>

<?php include("../../template/pie.php"); ?>