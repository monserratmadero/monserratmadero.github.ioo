<?php
$ce=["txtce"];
$pa=["cmbc"];
$fch=["fce"];
$hi=["hie"];
$hf=["hfe"];
$lg=["txtle"];
$CET=$_GET["ce"];
$sensql="delete from Pedidos where (CE='$CET')";
$con= mysqli_connect("localhost","root","","EfL","3305");
$res= mysqli_query($con,$sensql);
mysqli_close($con);
echo $res;
header("Location:pedido.php");
?>
