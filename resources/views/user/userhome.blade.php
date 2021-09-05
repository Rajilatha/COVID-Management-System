<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>corona</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
<x-header/>
<section>

</div>
<br>
<br>
<br>
<br>


<div class="container">

<div class="panel panel-primary" >
<h6>Series1: Covid Case Series2:Death Series3:Recovered</h6>
<div class="panel-body">
<div id="bar-chart"></div>
</div>
</div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
$(function(){
Highcharts.chart('bar-chart', {
chart: {
    type: 'column'
},
title: {
    text: 'Sri Lankan Covid Cases'
},
xAxis: {
    categories: <?= $values ?>,
    crosshair: true
},
yAxis: {
    min: 0,
    title: {
        text: 'Count'
    }
},
tooltip: {
    headerFormat: '<span style="font-size:10px">{point.key} Count</span><table>',
    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.description}: </td>' +
        '<td style="padding:0"><b>{point.y}</b></td></tr>',
    footerFormat: '</table>',
    shared: true,
    useHTML: true
},
plotOptions: {
    column: {
        pointPadding: 0.2,
        borderWidth: 0 
    }
},
series: <?= $data ?>
});
});
</script>

</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>
</html>