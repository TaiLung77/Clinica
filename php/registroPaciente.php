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
sexo,
grupoSanguineo)
VALUES
(
'$primer',
'$segundo',
'$paterno',
'$materno',
'$fecha',
'$identidad',
'$documentoIdentidad',
'$genero',
'$grupoSanguineo'
)";

$verificar_documento=mysqli_query($conexion, "SELECT*FROM clinica.persona WHERE documentoIdentidad='$documentoIdentidad'");
if(mysqli_num_rows($verificar_documento) > 0 ){

    echo'
      <script>
        alert("Este Documento de identidad ya esta registrado. Por favor verifique que los datos sean correctos.");
        window.location="../section/bienvenida.php";
      </script>

    ';  
    exit();
}
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
estadoCivil,
historialMedico,
idPersona)
VALUES
(
'$estadoCivil',
'$historial',
'$id');
";
  
$registrar2 = mysqli_query($conexion,$queryPaciente);


header("location:../section/bienvenida.php");