<!-- Archivo: nuevo_paciente.php -->
<div class="form-container">
    <h1>Nuevo Paciente</h1>
    <h4>Datos del paciente</h4>
    <form action="../php/registroPaciente.php" method="POST">
        <div class="grid grid-cols-2 gap-x-4">
            <h6>Primer Nombre</h6>
            <h6>Segundo Nombre</h6>
            <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" required name="primerNombre"/>
            <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" required name="segundoNombre"/>
        </div>
        <div class="grid grid-cols-2 gap-x-4">
            <h6>Apellido Paterno</h6>
            <h6>Apellido Materno</h6>
            <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" required name="apellidoPaterno"/>            
            <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" required name="apellidoMaterno"/>
        </div>
        <div class="grid grid-cols-2 gap-x-4">
            <h6>Grupo Sanguíneo</h6>
            <h6>Estado Civil</h6>
        <select class="h-8 rounded-lg border-2 border-solid border-blue-600" required name="grupoSanguineo" id="grupoSanguineo">
        <option value="">Seleccionar...</option>
        <option value="A+">Grupo A Rh+</option>
        <option value="A-">Grupo A Rh-</option>
        <option value="B+">Grupo B Rh+</option>
        <option value="B-">Grupo B Rh-</option>
        <option value="AB+">Grupo AB Rh+</option>
        <option value="AB-">Grupo AB Rh-</option>
        <option value="O+">Grupo O Rh+</option>
        <option value="O-">Grupo O Rh-</option>
</select>
<select class="h-8 rounded-lg border-2 border-solid border-blue-600" required name="estadoCivil" id="estadoCivil">
    <option value="">Seleccionar...</option>
  <option value="soltero">Soltero/a</option>
  <option value="casado">Casado/a</option>
  <option value="conviviente">Conviviente</option>
  <option value="divorciado">Divorciado/a</option>
  <option value="viudo">Viudo/a</option>
</select>
    </div>
        <div class="grid grid-cols-1">
            <h6>Fecha de nacimiento</h6>
            <input type="date" class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600" required name="fecha" />
            <h6>Documento de Identidad</h6>
            <div>
              <input
                id="dni"
                type="radio"
                name="identidad"
                value="dni"
                required
              />
              <label for="dni" >DNI</label>
              <input
                id="carnet"
                type="radio"
                name="identidad"
                value="carnet"
                required
              />
              <label for="carnet">Carnet de Extranjería</label>
            </div>
            <input type="text" name="documentoIdentidad" class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600" />
            <div class="grid grid-cols-1 mt-4">
            <h6>Género</h6>
                <div>
                    <input id="masculino" type="radio" name="genero" value="masculino" required name="genero"/>
                    <label for="masculino">Masculino </label>
                </div>
                <div>
                    <input id="femenino" type="radio" name="genero" value="femenino" required name="genero"/>
                    <label for="femenino">Femenino </label>
                </div>
            </div>
        </div>
        <div>
            <h6>Historial Médico</h6>
            <textarea name="historial" id="" placeholder="Ej. Hipertensión, Diabtetes tipo 2, alergias..." required name="genero"></textarea>
        </div>
        <div class="flex justify-end">
            <button class="mr-8" type="submit">Guardar</button>
        </div>
    </form>
</div>