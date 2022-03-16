<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller CSS - width</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../../../CSS/estilo.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1><b class="text-white">Pseudo Code</b></h1>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <img src="../../../../IMG/logo.png">
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-4 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"
                            href="../../talleres-etiquetas-css.php"><B>Etiquetas</B></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="nav-link active fs-6" aria-current="page"
                            href="../../../talleres.php"><B>Talleres</B></a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a class="btn btn-dark fs-6" href="../../../../login.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="contenedor">
            <h2 id="t"><b>TALLER CSS WIDTH</b></h2>
            <div class="contenido-taller">
                <div class="contenido">
                    <h3>WIDTH</h3>
                    <p>Se utiliza para dar un tamaño definido a una imagen que se encuentre en la hoja de html  
                        <br>(Es necesario usar espacios en el código)<br><br>
                        <strong>Ejemplo: </strong><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <img class="smaller-image1" src="../../../../IMG/ejemCss.jpg"> <br><br> 
                        <p class="imagen1"><b>.smaller-image2{ width: 30%; }</b></p>
                        <center><p class="mensaje1"><b>Esta imagen tiene un <b>width de 30%</b>, para el el ejemplo que vamos a realizar vamos a poner un <b>width de 50%</b> a la imagen de referencia. <br>Puedes tomar como ejemplo el código de arriba.</b></p></center>
                        <div class="codigo">
                            <textarea  id="txtCodigo"></textarea>
                        </div>
                        <button class="btn btn-primary" onclick="mostrar_texto.accion()">Visualizar</button><br>
                    </div>
                    <div class="mostrar" id="mostrar"> 
                        <main>
                            <p id="imagen_ejemplo"><img src="../../../../IMG/ejemCss1.jpg"> <br><br></b></p>
                        </main>
                    </div>
                    <div class="mensaje" id="mensaje">
                        <p>Correcto</p>
                        <button><a href="../../talleres-etiquetas-css.php">Regresar al inicio</a></button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
        <script src="../../../../JS/CSS/color.js"></script>
    </body>
    </html>