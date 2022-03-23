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
    <title>Añadir Alumno</title>
    <link rel="stylesheet" href="MiEstilo.css" type="text/css">
    <script type="text/javascript"></script>
    <script>
        function GenerarNumCtrl() {
            var Num_Ctrl_Ant = document.getElementById('numct').value;
            var numctrl;

            if ((parseInt(Num_Ctrl_Ant) - 19420000) <= 999) {
                numctrl = parseInt(Num_Ctrl_Ant)+1 ;
                document.getElementById('numct').value = numctrl;
            }
            else
                alert('Se exedio el limite de alumnos');
        }

        function Validar() {
            var nombre = document.getElementById('nomb').value;
            var apellido1 = document.getElementById('appat').value;
            var apellido2 = document.getElementById('apmat').value;
            var sexo = document.getElementById('sex');
            var edad = document.getElementById('edad').value;
            var correo = document.getElementById('correo').value;
            var telefono = document.getElementById('telef').value;
            var domicilio = document.getElementById('dom').value;
            var carrera = document.getElementById('car');

            var selectedsex = sexo.options[sexo.selectedIndex].value;
            var selectedcar = carrera.options[carrera.selectedIndex].text;
            console.log(selectedcar);
            if(nombre==""){
                document.getElementById('nomb').focus();
                alert('No has escrito tu nombre');
            }
            else{
                if(apellido1==""){
                    document.getElementById('appat').focus();
                    alert('No has escrito tu Ap. Paterno');
                }
                else{
                    if(apellido2==""){
                        document.getElementById('apmat').focus();
                        alert('No has escrito tu Ap. Materno');
                    }
                    else{
                        if(edad<16){
                            document.getElementById('edad').focus();
                            alert('No has puesto tu Edad o es menor a 16 años');
                        } 
                        else{
                            if(selectedsex=="Seleccionar..."){
                                document.getElementById('sex').focus();
                                alert('Selecciona un sexo');
                            }
                            else{
                                if(selectedcar=="Seleccionar..."){
                                    document.getElementById('car').focus();
                                    alert('Selecciona una carrera');
                                }
                                else{
                                    document.Alumno.submit();
                                    alert('Registro Con Exito!');
                                }
                            }
                        }
                    }
                }
            }
                
            //alert('ps si jala que pedo?');
        }
    </script>
</head>


<body onload="GenerarNumCtrl();"
    style="background-image: url('img/TEC2.jpg'); background-size: 100% 100%; background-attachment: fixed;">
    <div class="container main-container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-3"></div>
            <div class="card border-0 p-4" style="width: 35rem;">
                <form name="Alumno" method="POST" ACTION="registro.php">
                    <div class="form-group row">
                        <label for="NumCtrl" class="col-4 col-form-label">Numero De Control:</label>
                        <div class="col-8">
                            <?php
                                $consu=$objBaseDatos->ConsultaSql('select MAX(NUM_CTRL) from ALUMNO;');
                                $clvarr=array();
                                $clvarr=$consu[0];
                                $clvant=$clvarr[0];
                                echo "<input type='number' readonly class='form-control-plaintext' name='numct' id='numct' value='$clvant'>"
                            ?>
                            
                            <small class="form-text text-muted">Es importante que aprenda este numero, con esto se
                                identificara en el instituto.</small>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="nomb">Nombre *</label>
                            <input type="text" pattern="[A-Za-z]" maxlength="25" class="form-control" name="nomb" id="nomb" required>
                        </div>
                        <div class="col">
                            <label for="appat">Apellido Paterno *</label>
                            <input type="text" pattern="[A-Za-z]" maxlength="20" class="form-control" name="appat" id="appat" required>
                        </div>
                        <div class="col">
                            <label for="apmat">Apellido Materno *</label>
                            <input type="text" pattern="[A-Za-z]" maxlength="20" class="form-control" name="apmat" id="apmat" required>
                        </div>
                    </div>
                    <label class="mt-2">Sexo *</label>
                    <select class="custom-select" name="sex" id="sex" required>
                        <option selected>Seleccionar...</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="XX">Complicado</option>
                    </select>
                    <div class="form-group mt-2">
                        <label for="edad">Edad</label>
                        <input type="number" min="17" max="40" class="form-control col-2" name="edad" id="edad">
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electronico</label>
                        <input type="email" class="form-control" name="correo" id="correo">
                    </div>
                    <div class="form-group">
                        <label for="telef">Telefono</label>
                        <input type="text" maxlength="12" pattern="[0-9]-" class="form-control" name="telef" id="telef">
                    </div>
                    <div class="form-group">
                        <label for="dom">Domicilio</label>
                        <input type="text" maxlength="30" class="form-control" id="dom" name="dom">
                    </div>
                    <label>Carrera *</label>
                    <select class="custom-select" name="car" id="car" required>
                        <option selected>Seleccionar...</option>
                        <option value="Ing. Sistemas Computacionales">Ing. Sistemas Computacionales</option>
                        <option value="Ing. Bioquímica">Ing. Bioquímica</option>
                        <option value="Lic. Administracion">Lic. Administracion</option>
                        <option value="Ing. Gestion Empresarial">Ing. Gestion Empresarial</option>
                        <option value="Ing. Industrial">Ing. Industrial</option>
                        <option value="Arquitectura">Arquitectura</option>
                        <option value="Contador Publico">Contador Publico</option>
                    </select>
                    <br>
                    <br>
                    <input class="col-6 btn btn-success btn-lg btn-block" name="regi" type="button" onclick="Validar();" value="Registrar">
                </form>
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