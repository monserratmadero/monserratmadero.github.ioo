 <?php
$cl=$_POST["idcli"];
$pa=$_POST["cmbc"];
$np=$_POST["nmp"];
$fch=$_POST["fce"];
$hi=$_POST["hie"];
$hf=$_POST["hfe"];
$lg=$_POST["txtle"];
$sensql="insert into Pedidos (ID_cliente,Nombre_paquete,ID_Paquete,Fecha,HoraI,HoraF,Lugar) values ('$cl', '$pa','$np', '$fch', '$hi', '$hf', '$lg')";
$con= mysqli_connect("localhost","root","","EfL","3305");
$res= mysqli_query($con,$sensql);
mysqli_close($con);
echo $res;
header("Location:pedido.php");
?>

