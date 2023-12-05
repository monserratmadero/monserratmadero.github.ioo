<?php
$cr=["txtcor"];
$no=["txtn"];
$nu=["nt"];
$di=["txtd"];
$cod=["txtcp"];
$sensql="delete from Cliente where (Correo_Electrinico=Correo_Electrinico)";
$con= mysqli_connect("localhost","root","","EfL","3305");
$res= mysqli_query($con,$sensql);
mysqli_close($con);
echo $res;
header("Location:Formularios.php");
?>
<?php
