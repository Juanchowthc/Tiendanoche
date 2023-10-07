<?php

require 'php/conexion.php';


$consulta = "SELECT * FROM relojes";


$resultado = mysqli_query($conexion, $consulta);


if (mysqli_num_rows($resultado) > 0) {
    
    echo "<table>";
    echo "<tr><th>ID_RELOG</th><th>NOMBRE</th><th>DESCRIPCION</th><th>PRECIO</th><th>DESCUENTO</th><th>disponibilidad</th><th>IMAGEN</th>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['ID_RELOJ'] . "</td>";
        echo "<td>" . $fila['NOMBRE'] . "</td>";
        echo "<td>" . $fila['DESCRIPCION'] . "</td>";
        echo "<td>" . $fila['PRECIO'] . "</td>";
        echo "<td>" . $fila['DESCUENTO'] . "</td>";
        echo "<td>" . $fila['disponibilidad'] . "</td>";
        echo "<td>" . $fila['IMAGEN'] . "</td>";
      
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}


mysqli_free_result($resultado);
mysqli_close($conexion);

?>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}
</style>

