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
    <title>Datos De Alumno</title>
    <link rel="stylesheet" href="MiEstilo.css" type="text/css">
    <script type="text/javascript">
    
        function demo()
        {
            document.mostalum.submit();
            //alert('que pedo que pedo?');
        }
    </script>

</head>

<body onload="inicio();" style="background-image: url('img/TEC2.jpg'); background-size: 100% 100%; background-attachment: fixed;">
    <div class="container main-container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="card border-0 p-4" style="width: 35rem;">
                <form action="Alum.php" method="POST" name="mostalum">
                    <?php
                        if(isset($_POST['numct'])){
                        $arralum=$objBaseDatos->ConsultaSql("select * from ALUMNO where NUM_CTRL=".$_POST['numct'].";");
                        $cons=array();
                        $cons=$arralum[0];
                        $nombre=$cons[1];
                        $appate=$cons[2];
                        $apmate=$cons[3];
                        $sexx=$cons[4];
                        $edad=$cons[5];
                        $corr=$cons[6];
                        $tel=$cons[7];
                        $domi=$cons[8];
                        $carre=$cons[9];
                        }
                        else{
                            $_POST['numct']="";
                            $nombre="";
                            $appate="";
                            $apmate="";
                            $sexx="";
                            $edad="";
                            $corr="";
                            $tel="";
                            $domi="";
                            $carre="";
                        }
                    ?>
                    <div class="form-group row">
                        <label for="ctrl" class="col-4 col-form-label">Numero De Control:</label>
                        <div class="col-8">
                            <?php echo"<input type='text' class='form-control' name='numct' id='ctrl' value='".$_POST['numct']."'>"?>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col">
                            <label for="nomb">Nombre</label>
                            <?php echo "<input type='text' readonly class='form-control' id='nomb' value='".$nombre."'>"?>
                        </div>
                        <div class="col">
                            <label for="Appat">Apellido Paterno</label>
                            <?php echo "<input type='text' id='Appat' readonly class='form-control' value='".$appate."'>"?>
                        </div>
                        <div class="col">
                            <label for="Apmat">Apellido Materno</label>
                            <?php echo "<input type='text' id='Apmat' readonly class='form-control' value='".$apmate."'>"?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sex">Sexo</label>
                        <?php echo "<input type='text' id='sex' readonly class='form-control' value='".$sexx."'>"?>
                    </div>
                    <div class="form-group mt-2">
                        <label for="edad">Edad</label>
                        <?php echo "<input type='number' readonly class='form-control' id='edad' value='".$edad."'>" ?>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electronico</label>
                        <?php echo "<input type='email' readonly class='form-control' id='correo' value='".$corr."'>"?>
                    </div>
                    <div class="form-group">
                        <label for="telef">Telefono</label>
                        <?php echo "<input type='text' readonly class='form-control' id='telef' value='".$tel."'>" ?>
                    </div>
                    <div class="form-group">
                        <label for="dom">Domicilio</label>
                        <?php echo "<input type='text' readonly class='form-control' id='dom' value='".$domi."'>"?>
                    </div>
                    <div class="form-group">
                        <label for="car">Carrera</label>
                        <?php echo "<input type='text' readonly class='form-control' id='car' value='".$carre."'>" ?>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <input type="button" onclick="demo();" class="col-4 btn btn-success btn-lg btn-block" value="Consultar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <footer class="page-footer font-small" style="background-color: rgb(14, 72, 138);">
        <div class="container text-center text-white text-md-left mt-5 pt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Sobre la pagina</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 140px;">
                    <p>Esta pagina web se realiza como proyecto de la materia "Programacion Web", y solo con fines edicativos.
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