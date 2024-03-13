<?php

		
		$conexion = mysqli_connect("localhost:3306","root","","HorariosCFM");
		if ($conexion->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
		}
		$conexion->query("SET NAMES 'utf8'");
		if(!empty($_POST["nombre"]) and !empty($_POST["codigo"])){
		$query="insert into
			actividad (nombre,Codigo,Seccion,N_participantes,ID,Semestre)
			values ('".$_POST["nombre"]."',".$_POST["codigo"].",'".$_POST["seccion"]."',".$_POST["NP"].",'".$_POST["id"]."','".$_POST["año"]."-".$_POST["semestre"]."');";
		}
echo $query;



$rs= mysqli_query($conexion, $query);
header("Location: http://localhost/horarioscfm/create_actividad.php");

		
		die();
?>