<?php
include("conexion.php");
$objBaseDatos=new ConexionSql('127.0.0.1:3355','root','','escuela');
$objBaseDatos->conectar();

$numct=$_POST['numct'];
var_dump($numct);
$nomb=$_POST['nomb'];
$appat=$_POST['appat'];
$appmat=$_POST['apmat'];
$sex=$_POST['sex'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$telef=$_POST['telef'];
$dom=$_POST['dom'];
$car=$_POST['car'];
//call InsertarAlumno(19420101,'Jose','Gaona','Lopez','M',15,'jose321@hotmail.com','351-145-5423','Galeana #321','Ing. Sistemas Computacionales');
$objBaseDatos->ConsultaSql("call InsertarAlumno('".$numct."','".$nomb."','".$appat."','".$appmat."','".$sex."','".$edad."','".$correo."','".$telef."','".$dom."','".$car."');");
//$objBaseDatos->resultadoSql();
header("Location: inicio.php");
?>
