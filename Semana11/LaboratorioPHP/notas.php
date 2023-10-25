<?php
    $dato[0]=$_REQUEST["curso"];
    $dato[1]=$_REQUEST["nota1"];
    $dato[2]=$_REQUEST["nota2"];
    $dato[3]=$_REQUEST["nota3"];
    $dato[4]=($dato[1]+$dato[2]+$dato[3])/3;
if($dato[1]<21 && $dato[2]<21 && $dato[3]<21){ 
    if($dato[4]>=12 ){
        $dato[5]="aprobado";
        $imagen="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9hPLds09jkI9YWJpWBVaSNKimLmc6FgnKH9C5l9hj&s";
    }else{
        $dato[5]="desaprobado";
        $imagen="https://cdn-icons-png.flaticon.com/512/4989/4989793.png";
    }
}
?>

curso: <?=$dato[0]?> <br>
promedio: <?= number_format($dato[4],1)?><br>
Condicion: <?=$dato[5]?><br>
<img src="<?=$imagen?>" height="180" width="180"><br>
<a href="ejem2.html">Regresar</a>