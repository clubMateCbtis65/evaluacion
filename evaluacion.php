<?php 
/*
NOMBRE DEL ALUMNO: AVIÑA NERI LEONARDO DANIEL
GRUPO:5PRAM

VF= P (1 + i) ^ n           Donde P= Préstamo               (500)
i= Tasa de interés       (3%)
n= Periodo                   (4) meses
*/

if(!$_POST){
    header('location:index.html');
}

$interes=$_POST['interes']/100; 
$p=$_POST['p']; //=500; //Préstamo
$m=$_POST['meses']; //Periodo en meses

$vf= array();

for ($n=1; $n <= $m; $n++) { 
    $vf[$n]= number_format( $p*pow( ( 1 + $interes) , $n) ,2);
}
// echo '<pre>';
// print_r($vf);
// echo '</pre>';
?>
<table >
    <tr>
        <th>MES</th><th>PRESTAMO</th><th>INTERES</th><th>IMPORTE</th>
    </tr>
    
    <?php   foreach ($vf as $i => $v) { ?>
    <tr>
    <?php   echo "<td>$i</td><td>$p</td><td>$interes</td><td>$v</td>"; ?>
    </tr>
    <?php  } ?>
</table>

<style>
    table{
        border: 2px solid #000;
        width: 500px;
        max-height: 99%;
        margin-right: 20px;
        border-collapse: collapse;
        background-color: #ebebeb;
    }

    td, th {
        margin: 0;
        border: 2px solid #000;
        text-align: center;
        max-height: 116px;
        background-color: lightcoral;
    }

    td{
        background-color: #ebebeb;
    }

    tr{
        max-height: 116px;
    }
</style>