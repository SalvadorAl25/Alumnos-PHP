<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Alumnos</title>
    <script type="text/javascript" src="Script.js"></script>
    <link rel="stylesheet" href="MiEstilo.css" type="text/css">
    <script>
        function Redireccion(n) {
            switch (n) {
                case 1:
                    location.href = "alum-new.php";
                    break;
                case 2:
                    location.href = "Alum.php";
                    break;
                case 3:
                    location.href = "horario.php";
                    break;
                case 4:
                    location.href = "Contacto.php";
            }
        }
    </script>
        
</head>

<body style="background-image: url('img/tecitj.jpg');">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container main-cointainer">
        <div class="row">
            <div class="col-3"></div>
            <div class="card border-0 pt-3 pb-3" style="background-color: #186FD1; width: 35rem;">
                <br>
                <div class="col-6 border p-4 align-self-center bg-white">
                    <h1 class="text-center">Alumnos</h1>
                    <hr>
                    <br>
                    <div class="row pl-3 pr-3">
                        <button type="button" onclick="Redireccion(1);"
                            class="btn btn-outline-success btn-lg btn-block">Alumno Nuevo</button>
                    </div>
                    <br>
                    <div class="row pl-3 pr-3">
                        <button type="button" onclick="Redireccion(2);"
                            class="btn btn-outline-success btn-lg btn-block">Datos del Alumno</button>
                    </div>
                    <br>
                    <div class="row pl-3 pr-3">
                        <button type="button" onclick="Redireccion(3);"
                            class="btn btn-outline-success btn-lg btn-block">Horario</button>
                    </div>
                    <br>
                    <div class="row pl-3 pr-3">
                        <button type="button" onclick="Redireccion(4);"
                            class="btn btn-outline-success btn-lg btn-block">Contacto</button>
                    </div>
                    <br>
                </div>
                <br>
            </div>
        </div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <footer class="page-footer font-small" style="background-color: rgb(14, 72, 138);">
        <div class="container text-center text-white text-md-left mt-5 pt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Sobre la pagina</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 140px;">
                    <p>Esta pagina web se realiza como proyecto de la materia "Programacion Web", y solo con fines
                        edicativos.
                        clase inpartida por el profesor Luis Irepan Nuñez
                    </p>
                </div>
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Redes Sociales</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 130px;">
                    <p>
                        <a href="https://www.facebook.com/ITJiquilpanMich" style="color:white;"><img
                                src="img/icon-facebook.png" class="m-sm-1" style="width: 30px; height: 30px;"
                                alt="Facebook">ITJ Oficial</a>
                    </p>
                </div>
            </div>
        </div>
        <hr class="center col-10">
        <div class="footer-copyright text-white text-center py-3">2019 Create by:
            <a>Salvador Alcalá</a>
        </div>
    </footer>
</body>

</html>

<script>

</script>