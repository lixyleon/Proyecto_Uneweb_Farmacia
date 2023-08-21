<?php 
     include("../../config/bd.php");
    
    $sql = $conexion ->query("SELECT fecha,monto_operacion FROM pagos ORDER BY fecha") ; 
   
 /* $sql2 = $conexion ->query("SELECT extract(YEAR_MONTH from fecha) as mes_año, sum(monto_operacion) as monto FROM pagos GROUP BY mes_año"); */
  
    $datos =$sql ->fetchAll(PDO::FETCH_OBJ);
     foreach($datos as $dato){
        $valoresY[] = $dato ->monto_operacion;
        $valoresX[]= $dato ->fecha;
     }


    $datosX = json_encode($valoresX);
    $datosY = json_encode($valoresY); 
?>

<div id="graficasBarras"></div>
<script type="text/javascript">
    function crearCadenaBarras(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>
<script>
    datosX = crearCadenaBarras('<?php echo $datosX ?>');
    datosY = crearCadenaBarras('<?php echo $datosY ?>');

    var layout = {
        title:'Monto pagado (USD)'
        };
    var data = [
        {
            x: datosX,
            y: datosY,
            type: 'line'
        }
    ];
    
    Plotly.newPlot('graficasBarras', data,layout );
</script> 