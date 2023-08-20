<?php 
   
   include("../../config/bd.php");
    
    $sql = $conexion ->query("SELECT fecha,monto from ventas order by fecha") ;
   
    $valoresY = array(); // montos
    $valoresX = array(); // fecha

    $datos =$sql ->fetchAll(PDO::FETCH_OBJ);
     foreach($datos as $dato){
        $valoresY[] = $dato ->monto;
         $valoresX[]= $dato ->fecha;
     }

    $datosX = json_encode($valoresX);
    $datosY = json_encode($valoresY);
    
?>

<div id=graficaLineal></div>
<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }

</script>

<script type="text/javascript">
    datosX = crearCadenaLineal('<?php echo $datosX ?>');
    datosY = crearCadenaLineal('<?php echo $datosY ?>');


    var trace1 = {
        x: datosX,
        y: datosY,
        type: 'scatter',
        line: {
            color: 'red',
            width: 2},
        marker: {
            color: 'red',
            size: 8}
};
    var layout = {
        title:'Monto vendido (USD)'
};
    var data = [trace1];
    
    Plotly.newPlot('graficaLineal', data,layout);
</script> 