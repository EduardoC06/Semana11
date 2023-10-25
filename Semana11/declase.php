<?php 
    $prod=$_POST["producto"];
    $cant=$_POST["cantidad"];
    $prec=$_POST["precio"];
    $desc=0;

    if($cant>12)
        $desc=0.15*$prec;
    $stot=$cant*$prec;
    $tot=$stot=($desc*$cant);
?>
<h3>
    producto: <?=$prod?>
    <br>Cantidad: <?=$cant?>
    <br>Precio: <?=$prec?>
    <br>Descuento: <?=$desc?>
    <br>Subtotal: <?=$stot?>
    <br>Total: <?=$tot?>
</h3>

