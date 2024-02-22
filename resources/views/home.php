<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--estilos-->
    
    <!-- Agrega los estilos de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
    <!--header-->

    <!--nav-->
    <!--title-->
    <div class="container-fluid">
        <h1>Centro de Evaluación ECM</h1>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Barra lateral -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">

                    <div class="nombre-pagina">
                        <ion-icon id="cloud" name="cloud-outline"></ion-icon>
                        <span>Curso</span>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="seccion1">
                                Sección 1
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion2">
                                Sección 2
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion3">
                                Sección 3
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion4">
                                Sección 4
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion5">
                                Sección 5
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion6">
                                Sección 6
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion7">
                                Sección 7
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion8">
                                Sección 8
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion9">
                                Sección 9
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seccion9">
                                Sección 10
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Contenido principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Contenido de la página -->
                <h1>Contenido</h1>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto vel, omnis beatae officia aperiam vitae nulla sapiente velit enim corrupti maxime blanditiis consequuntur non soluta odio, consectetur, fugit voluptatum ad.</p>
                <br>

                <!--Inicio de Sesión-->
                <title>Iniciar sesión</title>
                <h1>Formulario de Iniciar Sesión</h1>

                <!--Formulario de Inicio de Sesión-->
                <form action="/login" method="post">
                    <label for="username">Email:</label>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <br>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <br>

                    <button type="submit">Iniciar sesión</button>
                </form>
                <br>
                <br>

                <!--Inicio de Sesión-->
                <title>Registro</title>
                <h1>Formulario de Registro</h1>
                
                <!--Formulario de Inicio de Sesión-->
                <form action="/registro" method="post">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                    <br>
                    <br>

                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <br>

                    <label for="nombre">CURP:</label>
                    <input type="text" id="curp" name="curp" required>
                    <br>
                    <br>

                    <label for="nombre">Número de Teléfono:</label>
                    <input type="text" id="numero" name="numero" required>
                    <br>
                    <br>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <br>

                    <label for="password">Repetir Contraseña:</label>
                    <input type="password" id="password2" name="password2" required>
                    <br>
                    <br>

                    <button type="submit">Registrarse</button>
                </form>
                <br>
                <br>

            </main>
        </div>
    </div>

    <!-- Agrega los scripts de Bootstrap 5 (Popper.js y Bootstrap.bundle.min.js son necesarios) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



    <!--footer-->
    <!--script-->
</body>

</html>