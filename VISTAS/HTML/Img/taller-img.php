<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller HTML - &ltimg&gt</title>
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
            <h2 id="t">Taller HTML - &ltimg&gt</h2>
            <div class="contenido-taller">
                <div class="contenido">
                    <h3>&ltimg&gt</h3>
                    <p>A continuacion coloca una imagen para tu pagina. <br> 
                        <br><b>(Es necesario usar espacios en el codigo)</b><br><br>
                        <strong>Ejemplo: </strong><br><br>
                        <p class="imagen1"><b> &ltimg src="../../../IMG/ejemplo.jpg"&gt <br></b><br></p>
                        <img class="smaller-image1" src="../../../IMG/ejemplo.jpg" ><br><br>
                        <center><p class="mensaje1">En el ejemplo puesto el codigo que est de muestra lo puedes usar cuando ya tienes la iamgen guardada en tu maquina; para realizar el taller puedes escoger una imagen de intenter y copiar su direccion y colocarla cambiando <b>../../../IMG/ejemplo.jpg</b> y poniendo la direccion de la imagen.<b>(Puedes probar con:https://cdn.pixabay.com/photo/2021/07/30/08/21/street-6509043_960_720.jpg</b>)</p></center>
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
    <script src="../../../JS/HTML/img.js"></script>
</body>
</html>