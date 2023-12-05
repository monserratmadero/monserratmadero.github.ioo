 <h1>cliente</h1>
<?php
$cr=$_POST["txtcor"];
$no=$_POST["txtn"];
$nu=$_POST["nt"];
$di=$_POST["txtd"];
$cod=$_POST["txtcp"];
$sensql="insert into Cliente (Correo_Electrinico,Nombre,Telefono,Direccion,Codigo_Postal) values ('$cr','$no', '$nu', '$di', '$cod')";
$con= mysqli_connect("localhost","root","","EfL","3305");
$res= mysqli_query($con,$sensql);
mysqli_close($con);
echo $res;
header("Location:Formularios.php");
?>
