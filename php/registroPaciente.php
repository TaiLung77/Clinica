<?php

include "conexion_be.php";

$primer = $_POST ["primerNombre"];
$segundo = $_POST ["segundoNombre"];
$paterno = $_POST ["apellidoPaterno"];
$materno = $_POST ["apellidoMaterno"];
$identidad = $_POST ["identidad"];
$grupoSanguineo = $_POST ["grupoSanguineo"];
$documentoIdentidad = $_POST ["documentoIdentidad"];
$estadoCivil = $_POST ["estadoCivil"];
$fecha = $_POST ["fecha"];
$generoForm = $_POST ["genero"];
$historial = $_POST ["historial"];
$genero="";
if($generoForm =="masculino"){
    $genero="M";
}else{
$genero="F";
}
$query = "INSERT INTO clinica.persona
(
nombrePrimer,
nombreSegundo,
apellidoPaterno,
apellidoMaterno,
fechaNacimiento,
tipoDoumento,
documentoIdentidad,
sexo)
VALUES
(
'$primer',
'$segundo',
'$paterno',
'$materno',
'$fecha',
'$identidad',
'$documentoIdentidad',
'$genero'
)";

$registrar = mysqli_query($conexion,$query);   

$id=0;
$queryBusquedaPaciente = "SELECT persona.id
FROM clinica.persona WHERE documentoIdentidad=$documentoIdentidad;
";

$registrar = mysqli_query($conexion,$queryBusquedaPaciente);   


if (mysqli_num_rows($registrar) > 0) {
    while ($fila = mysqli_fetch_assoc($registrar)) {
        $id= $fila['id'] ;
    }
}

$queryPaciente = "INSERT INTO clinica.paciente
(
grupoSanguineo,
estadoCivil,
historialMedico,
idPersona)
VALUES
(
'$grupoSanguineo',
'$estadoCivil',
'$historial',
'$id');
";
  
$registrar2 = mysqli_query($conexion,$queryPaciente);

header("location:../section/bienvenida.html");