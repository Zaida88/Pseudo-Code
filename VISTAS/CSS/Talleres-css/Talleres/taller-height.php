<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller CSS - Height</title>
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
            <h2 id="t"><b>TALLER CSS HEIGHT</b></h2>
            <div class="contenido-taller">
                <div class="contenido">
                    <h3><b>HEIGHT</b></h3>
                    <p>Por ejemplo si quisiera establecer la altura de una imguen usaria el siguente codigo
                        <br>(Es necesario usar espacios en el código)<br><br>
                        <strong>Ejemplo: </strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <p class="imagen1"><b> &ltimg src="link de imagen(puedes poner cualquier direccion)"&gt <br>
                            &ltstyle&gt<br>
                            img{
                                height: 100px; }<br>
                            &lt/style&gt
                        </b>  
                        <center><p class="mensaje1"><b>En el ejemplo pusimos altura de <b>100px</b>, el ejemplo que vas a realizar le vas a colocar una altura de <b>200px</b>.<br>Puedes tomar como ejemplo el código de arriba.</b></p></center>
                    </p>  
                    </p>
                    <div class="codigo">
                        <textarea
                        id="text" 
                        placeholder="escribe tu codigo aqui "></textarea>
                    </div>
                    <button class="btn btn-primary" id="mostrar_texto" onclick="update()" >Visualizar</button><br>
                </div>
                <iframe id="view" srcdoc=" "></iframe>
                    <main>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
    <script src="../../../../JS/CSS/heigth.js"></script>
</body>
</html>