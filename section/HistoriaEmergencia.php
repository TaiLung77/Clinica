<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <title>Historia Clínica de Emergencia</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/estilos/style.css" />
    <link rel="shortcut icon" href="/img/logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
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
    </style>
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
        <div class="form-container">
            <h1>Historia Clínica de Emergencia</h1>
            <h4>Datos Generales</h4>
            <form action="#">
                <div class="grid grid-cols-2 gap-x-4">
                    <h6>Nombre</h6>
                    <h6>Apellido</h6>
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                </div>
                <div class="grid grid-cols-2 gap-x-4 mt-4">
                    <h6>Documento de Identidad</h6>
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                </div>
                <div class="grid grid-cols-1 mt-4">
                    <h6>Género</h6>
                    <select class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-x-4 mt-4">
                    <h6>Fecha de nacimiento</h6>
                    <h6>Edad</h6>
                    <input type="date" class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600" />
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                </div>
                <div class="grid grid-cols-1 mt-4">
                    <h6>Tipo de atención</h6>
                    <textarea class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600"></textarea>
                </div>
                <div class="grid grid-cols-2 gap-x-4 mt-4">
                    <h6>Departamento</h6>
                    <h6>Provincia</h6>
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                </div>
                <div class="grid grid-cols-2 gap-x-4 mt-4">
                    <h6>Distrito</h6>
                    <h6>Localidad</h6>
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                </div>
                <div class="grid grid-cols-1 mt-4">
                    <h6>Dirección</h6>
                    <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                </div>
                <div class="grid grid-cols-1 mt-4">
                    <h6>Síntomas principales</h6>
                    <textarea class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600"></textarea>
                </div>
                <div class="grid grid-cols-1 mt-4">
                    <h6>Relato</h6>
                    <textarea class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600"></textarea>
                </div>
                <div class="grid grid-cols-1 mt-4">
                    <h6>Antecedentes</h6>
                    <textarea class="form__input h-8 p-4 rounded-lg border-2 border-solid border-blue-600"></textarea>
                </div>
                <div class="grid grid-cols-5 gap-x-4 mt-4">
                    <div>
                        <h6>FC</h6> 
                        <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    </div>
                    <div>
                        <h6>FR</h6>
                        <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    </div>
                    <div>
                        <h6>T</h6>
                        <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    </div>
                    <div>
                        <h6>PA</h6>
                        <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    </div>
                    <div>
                        <h6>SAT O2</h6>
                        <input type="text" class="h-8 rounded-lg border-2 border-solid border-blue-600" />
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button class="mr-8" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
