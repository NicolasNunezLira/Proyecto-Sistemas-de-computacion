<?php

		
		$conexion = mysqli_connect("localhost:3306","root","","HorariosCFM");
		if ($conexion->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
		}

		$query="insert into
		reserva(Nombre,Bloque,Dia,Semana,Codigo,Seccion,Anno_Semestre)
		values ('".$_POST["nombresala"]."',".$_POST["bloque"].",'".$_POST["dia"]."',".$_POST["semana"].",'".$_POST["codigo"]."',".$_POST["seccion"].",'".$_POST["anoseme"]."');";

echo $query;



$rs= mysqli_query($conexion, $query);
header("Location: http://localhost/horarioscfm/create_reserva.php");

		
		die();
?>

