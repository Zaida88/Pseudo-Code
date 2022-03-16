<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller JS - Confirm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../../../CSS/estilo.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="../../../../../IMG/logo.png">
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-4 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"
                            href="../../js-taller-modulos.php">Módulos</a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page" href="../../../../cursos.php">Cursos</a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page" href="../../../../talleres.php">Talleres</a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="btn btn-primary fs-6" href="../../../../login.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="contenedor">
            <div class="navegacion">
                <div class="botones">
                    <a href="taller-alert.php"><button>◄</button></a>
                    <h2><b>Taller JS - Alert, Confirm, Prompt</b></h2>
                    <a href="taller-prompt.php"><button>►</button></a>
                </div>
            </div>
            <div class="contenido-taller">
                <div class="contenido">
                    <h3> Confirm</h3>
                    <p>
                        Un cuadro de confirmación se usa a menudo para que el usuario verifique o acepte algo. Cuando
                        aparece un cuadro de confirmación, el usuario debe hacer clic en Aceptar o Cancelar para
                        continuar. <br>
                        A continuación cree su propio cuadro de confirmación. <br>
                    </p>
                    <div class="codigo" style="text-align: justify;">
                        var resultado = confirm("<input type="text" id="pregunta" placeholder="pregunta">"); <br>
                        if (resultado == true) { <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;alert("<input type="text" id="mensaje1" placeholder="mensaje 1">"); <br>
                        } <br>
                        else { <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;alert("<input type="text" id="mensaje2" placeholder="mensaje 2">"); <br>
                        }
                    </div>
                    <button class="btn btn-primary" onclick="mostrar_texto.accion()">Visualizar</button>
                </div>
                <div class="mostrar" id="mostrar">
                </div>
                <div class="mensaje" id="mensaje">
                    <button><a href="../../js-taller-modulos.php">Regresar al inicio</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>
    <script src="../../../../../JS/JS/Funciones/alert,confirm,prompt/confirm.js"></script>
</body>

</html>