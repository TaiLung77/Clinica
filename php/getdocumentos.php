<?php 
 include 'conexion_be.php';
 
 $dni = $_POST["search-input"];
 $sql="SELECT documentoIdentidad, nombrePrimer, apellidoPaterno, apellidoMaterno FROM clinica.persona 
 WHERE nombrePrimer LIKE ?  ORDER BY nombrePrimer ASC";

$query ->execute([$dni.'%'])
$html="";

while($row = $query-> fetch($filas)){
$html .= "<li>",$row["documentoIdentidad"]." - ".$row["nombrePrimer "].$row["apellidoPaterno "].$row["apellidoMaterno"]"</li>";
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);

?>