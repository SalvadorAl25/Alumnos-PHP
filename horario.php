<!DOCTYPE html>
<html lang="es">

<?php
    require_once("conexion.php");
    $objBaseDatos=new ConexionSql('127.0.0.1:3355','root','','escuela');
    $objBaseDatos->conectar();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horario</title>
    <link rel="stylesheet" href="MiEstilo.css" type="text/css">
    <script type="text/javascript">
        function Consultar()
        {
            //alert('si funciona el boton!');
            document.accion.submit();
            document.tablahorario.submit();
            
        }
    </script>
</head>

<body style="background-image: url('img/TEC2.jpg'); background-size: 100% 100%; background-attachment: fixed;">
    <div class="container main-container">
        <br>
        <br>
        <br>
        <div class="col-12" style="background-color: white;">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-3">
                    <h2 class="text-center">Horario</h2>
                    <hr>
                </div>
                <div class="col-4"></div>
            </div>
            <?php
                if(isset($_POST['busca'])){
                    $horarioarr=$objBaseDatos->ConsultaSql("select * from horario where NUM_CTRL=".$_POST['busca'].";");
                }
                else{
                    $_POST['busca']="";
                }
            ?>
                <form action="horario.php" method="post" name="accion">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-4">
                            <?php echo "<input type='text' class='form-control mr-2' placeholder='Num. Ctrl' name='busca' id='buscar' value='".$_POST['busca']."'>"; ?>
                        </div>
                        <input type="button" class="btn btn-outline-secondary" onclick="Consultar();" value="buscar">
                    </div>
                </form>
            <br>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Materia</th>
                                <th scope="col">Docente</th>
                                <th scope="col">Creditos</th>
                                <th scope="col">Lunes</th>
                                <th scope="col">Martes</th>
                                <th scope="col">Miercoles</th>
                                <th scope="col">Jueves</th>
                                <th scope="col">Viernes</th>
                            </tr>
                        </thead>
                        
                        <tbody name="tablahorario">
                            <?php
                                if(isset($horarioarr))
                                {
                                    foreach($horarioarr as $horario)
                                        if(isset($horario)){
                                        echo "<tr>";
                                        echo "<th scope='row'>$horario[1]</th>";
                                        echo "<td>$horario[2]</td>";
                                        echo "<td>$horario[3]</td>";
                                        echo "<td>$horario[4]</td>";
                                        echo "<td>$horario[5]</td>";
                                        echo "<td>$horario[6]</td>";
                                        echo "<td>$horario[7]</td>";
                                        echo "<td>$horario[8]</td>";
                                        echo "<tr>";
                                        }
                                        else{
                                            echo "<script type='text/javascript'>
                                                alert('No tienes materias registradas');
                                            </script>";
                                        }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <footer class="page-footer font-small" style="background-color: rgb(14, 72, 138);">
        <div class="container text-center text-white text-md-left mt-5 pt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Sobre la pagina</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 140px;">
                    <p>Esta pagina web se realiza como proyecto de la materia "Programacion Web", y solo con fines
                        edicativos.
                        Profesor: Luis Irepan Nuñez
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