<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profesor Menú</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Importaciones de estilos css y javascript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Poppins&display=swap" rel="stylesheet">
    <meta name="robots" content="noindex, follow">
</head>

<!-- Body con css para la imagen de fondo -->
<body style="background-image: url(images/marte8.jpg);">
    <!-- Estableciendo NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid px-3">
            <a href="landing.html">
                <img src="images/Logo - copia.png" class="image-fluid custom-image12" alt="">
                <b class="navbar-brand px-2" style="color:white">SPACE QUIZ</b>
            </a>
            <div class="d-flex align-items-center justify-content-end">
                <select class="form-select" id="moduleSelect" onchange="redirect()">
                    <option value="" selected disabled>Salir</option>
                    <option value="1">Configuración</option>
                    <option value="2">Menú</option>
                </select>
            </div>
        </div>
    </nav>
    <!-- Creación de container que contiene cuerpo del cuerpo de la página -->
    <div class="container col-md-7">
        <div class="responsive-container">
            <!-- Estabkeciendo color de fondo transparente -->
            <div style="background-color: rgba(255, 255, 255, 0.5);">
                <div id="encabezado2" class="container">
                    <h2>Código de la sala</h2>
                    <!-- Estableciendo redondeado -->
                    <div class="codigo-sala rounded-5">
                        xxxx-xxxx
                    </div>
                </div>
                <!-- Definiendo los espacios donde se mostrarán los Alumnos que ingresen al juego -->
                <div class="row" id="row">
                    <!-- Aquí se generarán los 20 espacios negros -->
                </div>
                <!-- Definiendo la creación de botón iniciar juego -->
                <div class="py-3">
                    <button class="btn btn-warning btn-lg btn-iniciar-juego py-3 rounded-5">INICIAR JUEGO</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/codigosala.js"></script>
</body>

</html>
