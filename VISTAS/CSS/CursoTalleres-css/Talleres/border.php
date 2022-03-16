<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller CSS - border</title>
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
            <h2 id="t"><b>TALLER CSS BORDER</b> </h2>
            <div class="contenido-taller">
                <div class="contenido">
                    <h3>BORDER</h3>
                    <p>Se utiliza para crear bordes de diferente grozor y dar color a un elemento html 
                        <br>(Es necesario usar espacios en el código)<br><br>
                        <strong>Ejemplo: </strong><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <img class="smaller-image" src="../../../../IMG/ejemplo3.jpg">
                        <p class="imagen1"><b>.imagen{ border: 4px solid red; }</b></p>
                            <center><p class="mensaje1"><b>En la imagen que se presenta más arriba podemos visualizar un borde rojo rodeando a la imagen del gato con un grosor de 4px; para el ejemplo a realizar vamos hacer un borde de <b>10px</b> de un color <b>purpura (purple)</b>.<br> Puedes tomar como referencia el código de arriba.</b></p></center>
                    </p>                    
                    <div class="codigo">
                        <textarea  id="txtCodigo" ></textarea>
                    </div>
                    <button class="btn btn-primary" onclick="mostrar_texto.accion()">Visualizar</button><br>
                </div>
                <div class="mostrar" id="mostrar">
                    <main> 
                        <img id="imagen" class="imagen" src="../../../../IMG/ejemplo4.jpg">    
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
    <script src="../../../../JS/CSS/border.js"></script>
</body>
</html>