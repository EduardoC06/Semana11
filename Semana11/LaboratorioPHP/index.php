<?php 
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $basedatos = "sistemas";

    $conexion = mysqli_connect($servidor, $usuario, $password) or die
    ("No se ha podido conectar con el servidor");

    $db= mysqli_select_db($conexion, $basedatos) or die
    ("No se conecto a la base de datos");

    $consulta = "SELECT * FROM alumno";
    $resultado = mysqli_query($conexion, $consulta) or die
    ("Error de consulta en la base de datos");

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Nombres</th>";
    echo "<th>Apellidos</th>";
    echo "<th>Email</th>";
    echo "<th>Fecha</th>";
    echo "</tr>"

    while($columna = mysqli_fetch_array($resultado)){
        echo "<tr>"
        echo "<td>"
            . $columna['nombres'] . "</td><td>"
            . $columna['apellidos'] . "</td><td>"
            . $columna['email'] . "</td><td>"
            . $columna['recha'] . "</td>";
        echo "</tr>";
                
    }

    echo "</table>";

    mysqli_close($conexion);
?>
