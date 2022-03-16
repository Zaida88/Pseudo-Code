<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller HTML - &lta&gt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../CSS/estilo.css">
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
                            href="../html-taller-etiquetas.php"><b>Etiquetas</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"
                            href="../../talleres.php"><b>Talleres</b></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="btn btn-dark" href="../../../login.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="contenedor">
            <h2 id="t"><b>Taller HTML - &lta&gt</b></h2>
            <div class="contenido-taller">
                <div class="contenido">
                    <h3>&lta&gt</h3>
                    <p>Puede utilizar elementos a (ancla) para vincular a contenido fuera de su página web.
                        <br>(Es necesario usar espacios en el codigo)<br><br>
                        <strong>Ejemplo: </strong>
                        <h4>&lta href="#"&gt Este es un enlace &lt/a&gt</h4><br><br>
                        <center><p class="mensaje1">Para que este enlace funcione puedes suplantar al <b>#</b> por algun enlace de tu preferencia.(Puedes probar con: <b>https://pixabay.com/es/</b></b>)</p></center>
                    </p>
                    <div class="codigo">
                        <textarea  id="txtCodigo"></textarea>
                    </div>
                    <button class="btn btn-primary" onclick="mostrar_texto.accion()">Visualizar</button><br>
                </div>
                <div class="mostrar" id="mostrar">
                </div>
                <div class="mensaje" id="mensaje">
                    <p>Correcto</p>
                    <button><a href="../html-taller-etiquetas.php">Regresar al inicio</a></button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
    <script src="../../../JS/HTML/a.js"></script>
</body>
</html>