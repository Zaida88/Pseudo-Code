<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso HTML - &ltimg&gt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../CSS/style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1><b class="text-white">Pseudo Code</b></h1>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="../../../IMG/logo.gif">
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-4 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"
                            href="../html-curso-etiquetas.php"><b>Etiquetas</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page" href="../../cursos.php"><b>Cursos</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page" href="../../talleres.php"><b>Talleres</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="btn btn-dark fs-6" href="../../login.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="contenedor">
            <h2><b>CURSO HTML - &ltimg&gt</b></h2>
            <div class="contenido-cursos">
                <p>
                    El tag básico para colocar una imagen es “img“. Este tag, a diferencia de la gran mayoría de los
                    tags de html, no necesita un cierre. Va acompañado de diferentes atributos que te vamos a explicar a
                    continuación.
                    El atributo “src” es imprescindible para poder colocar una imagen. Este atributo es el que indica
                    dónde se encuentra alojada la imagen que queremos mostrar. Se escribe así: &ltimg src=”x”&gt, siendo
                    “x” la dirección o la url dónde se encuentra situada la foto.
                    La foto podemos alinearla en la página como queramos mediante “align“, utilizando los atributos
                    “left” para alinearla a la izquierda, “right” para alinearla a la derecha, “top” para alinearla
                    arriba, “bottom” para alinearla abajo y “middle” para alinearla al centro.
                </p>
                <center><img src="../../../IMG/img.png"></center>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>