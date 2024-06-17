<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Historia Clínica de Emergencia</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../estilos/style.css" />
    <link rel="stylesheet" href="../estilos/styleem.css" />
    <link rel="shortcut icon" href="/img/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h1, .form-container h4 {
            text-align: left;
        }
        .form-container .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
        .form-container .grid-cols-1 {
            grid-template-columns: 1fr;
        }
        .form-container .grid-cols-2 {
            grid-template-columns: repeat(2, 1fr);
        }
        .form-container .grid-cols-5 {
            grid-template-columns: repeat(5, 1fr);
        }
    </style>-->
</head>
<body id="root">
    <!-- Hamburger al achicar la pantalla -->
    <div class="hamburger">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </div>
    <div class="menubar">
        <li><a href="../php/logout.php">Cerrar Sesión</a></li>
    </div>

    <div class="container">
     
    <div class="search-container">
    <input type="text" id="search-input" placeholder="Ingrese Documento de identidad">
    <button id="search-button" type= "submit"></button>
</div>


<div class="container">
        <h1>Historia Clínica de Emergencia</h1>
        <form id="emergencyForm">
            <!-- Información General -->
            <fieldset>
                <legend>Datos Generales</legend>
                <div class="row">
                    <label for="registro">N° de Registro:</label>
                    <input type="text" id="registro" name="registro">
                </div>
                <div class="row">
                    <label for="fechaAtencion">Fecha de Atención:</label>
                    <input type="date" id="fechaAtencion" name="fechaAtencion">
                    <label for="horaAtencion">Hora de Atención:</label>
                    <input type="time" id="horaAtencion" name="horaAtencion">
                </div>
                <div class="row">
                    <label for="nombre">Nombres y Apellidos:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>
                <div class="row">
                    <label for="dni">DNI:</label>
                    <input type="text" id="dni" name="dni">
                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" readonly>
                </div>
                <div class="row">
                    <label for="sexo">Sexo:</label>
                    <select id="sexo" name="sexo">
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento">
                </div>
                <div class="row">
                    <label for="estadoCivil">Estado Civil:</label>
                    <select id="estadoCivil" name="estadoCivil">
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                        <option value="Viudo">Viudo</option>
                        <option value="Divorciado">Divorciado</option>
                    </select>
                </div>
            </fieldset>

            <!-- Domicilio -->
            <fieldset>
                <legend>Domicilio</legend>
                <div class="row">
                    <label for="departamento">Departamento:</label>
                    <input type="text" id="departamento" name="departamento">
                </div>
                <div class="row">
                    <label for="provincia">Provincia:</label>
                    <input type="text" id="provincia" name="provincia">
                    <label for="distrito">Distrito:</label>
                    <input type="text" id="distrito" name="distrito">
                </div>
                <div class="row">
                    <label for="localidad">Localidad:</label>
                    <input type="text" id="localidad" name="localidad">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion">
                </div>
                <div class="row">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono">
                    <label for="procedencia">Procedencia:</label>
                    <input type="text" id="procedencia" name="procedencia">
                </div>
            </fieldset>

            <!-- Tipo de Atención y Servicio -->
            <fieldset>
                <legend>Tipo de Atención y Servicio</legend>
                <div class="row">
                    <label for="tipoAtencion">Tipo de Atención:</label>
                    <select id="tipoAtencion" name="tipoAtencion">
                        <option value="Sin Seguro">Sin Seguro</option>
                        <option value="AUS">AUS</option>
                        <option value="SOAT">SOAT</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="row">
                    <label for="servicio">Servicio:</label>
                    <input type="text" id="servicio" name="servicio">
                    <label for="especialidad">Especialidad:</label>
                    <input type="text" id="especialidad" name="especialidad">
                </div>
                <div class="row">
                    <label for="medico">Médico Tratante:</label>
                    <input type="text" id="medico" name="medico">
                    <label for="codigoMedico">Código Médico:</label>
                    <input type="text" id="codigoMedico" name="codigoMedico">
                </div>
            </fieldset>

            <!-- Anamnesis -->
            <fieldset>
                <legend>Anamnesis</legend>
                <div class="row">
                    <label for="tiempoEnfermedad">Tiempo de Enfermedad:</label>
                    <input type="text" id="tiempoEnfermedad" name="tiempoEnfermedad">
                </div>
                <div class="row">
                    <label for="sintomas">Síntomas principales:</label>
                    <textarea id="sintomas" name="sintomas"></textarea>
                </div>
                <div class="row">
                    <label for="relato">Relato:</label>
                    <textarea id="relato" name="relato"></textarea>
                </div>
                <div class="row">
                    <label for="antecedentes">Antecedentes:</label>
                    <textarea id="antecedentes" name="antecedentes"></textarea>
                </div>
                <div class="row">
                    <label for="examenFisico">Examen Físico:</label>
                    <textarea id="examenFisico" name="examenFisico"></textarea>
                </div>
            </fieldset>

            <!-- Impresión Diagnóstica -->
            <fieldset>
                <legend>Impresión Diagnóstica</legend>
                <div class="row">
                    <label for="diagnostico">Diagnóstico:</label>
                    <input type="text" id="diagnostico" name="diagnostico">
                    <label for="cie10">CIE-10:</label>
                    <input type="text" id="cie10" name="cie10">
                </div>
            </fieldset>

            <!-- Examen Auxiliares -->
            <fieldset>
                <legend>Examen Auxiliares</legend>
                <div class="row">
                    <label for="examenAuxiliares">Examen Auxiliares:</label>
                    <textarea id="examenAuxiliares" name="examenAuxiliares"></textarea>
                </div>
            </fieldset>

            <!-- Tratamiento -->
            <fieldset>
                <legend>Tratamiento</legend>
                <div class="row">
                    <label for="tratamiento">Tratamiento:</label>
                    <textarea id="tratamiento" name="tratamiento"></textarea>
                </div>
            </fieldset>

            <!-- Destino del Paciente -->
            <fieldset>
                <legend>Destino del Paciente</legend>
                <div class="row">
                    <label for="destinoPaciente">Destino del Paciente:</label>
                    <select id="destinoPaciente" name="destinoPaciente">
                        <option value="Domicilio">Domicilio</option>
                        <option value="Referido">Referido</option>
                        <option value="Defunción">Defunción</option>
                        <option value="Fuga">Fuga</option>
                        <option value="Observación">Observación</option>
                    </select>
                    <label for="establecimiento">Especificar Establecimiento:</label>
                    <textarea id="establecimiento" name="establecimiento"></textarea>
                </div>
            </fieldset>

            <!-- Datos de Atención en Observación -->
            <fieldset>
                <legend>Datos de Atención en Observación</legend>
                <div class="row">
                    <label for="fechaIngreso">Fecha y Hora de Ingreso:</label>
                    <input type="datetime-local" id="fechaIngreso" name="fechaIngreso">
                </div>
                <div class="row">
                    <label for="evolucion">Evolución:</label>
                    <textarea id="evolucion" name="evolucion"></textarea>
                </div>
            </fieldset>

            <!-- Alta del Paciente -->
            <fieldset>
                <legend>Alta del Paciente</legend>
                <div class="row">
                    <label for="fechaAlta">Fecha y Hora de Alta:</label>
                    <input type="datetime-local" id="fechaAlta" name="fechaAlta">
                </div>
                <div class="row">
                    <label for="responsableAlta">Responsable de Alta:</label>
                    <input type="text" id="responsableAlta" name="responsableAlta">
                    <label for="codigoResponsable">Código del Responsable:</label>
                    <input type="text" id="codigoResponsable" name="codigoResponsable">
                </div>
            </fieldset>

            <!-- Firma -->
            <fieldset>
                <legend>Firma</legend>
                <div class="row">
                    <label for="firma">Firma:</label>
                    <input type="file" id="firma" name="firma">
                </div>
            </fieldset>

            <!-- Botón de Enviar -->
            <div class="row">
                <button type="submit">Guardar Historia Clínica</button>
            </div>
        </form>
    </div>
    <script src="../diana/script.js"></script>
</body>
</html>
