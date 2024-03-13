<?php
$conexion = mysqli_connect("localhost:3306","root","","HorariosCFM");
		if ($conexion->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
		}
		$conexion->query("SET NAMES 'utf8'");

if(!empty($_POST['check_list1'])) {
	foreach($_POST['check_list1'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','1','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list2'])) {
	foreach($_POST['check_list2'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','2','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list3'])) {
	foreach($_POST['check_list3'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','3','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
		
		if(!empty($_POST['check_list4'])) {
	foreach($_POST['check_list4'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','4','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list5'])) {
	foreach($_POST['check_list5'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','5','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list6'])) {
	foreach($_POST['check_list6'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','6','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list7'])) {
	foreach($_POST['check_list7'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','7','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list8'])) {
	foreach($_POST['check_list8'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','8','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list9'])) {
	foreach($_POST['check_list9'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','9','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list10'])) {
	foreach($_POST['check_list10'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','10','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list11'])) {
	foreach($_POST['check_list11'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','11','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list12'])) {
	foreach($_POST['check_list12'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','12','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list13'])) {
	foreach($_POST['check_list13'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','13','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
if(!empty($_POST['check_list14'])) {
	foreach($_POST['check_list14'] as $selected) {
		$S=explode(";",$selected);
		for ($x = 1; $x <= 17; $x++) {
			echo $x;
			$query="insert into
			reserva (Nombre,Bloque,Dia,Semana,Codigo,Seccion,Semestre)
			values ('$S[0]','14','$S[1]','$x','".$_POST["codigo"]."','".$_POST["seccion"]."','".$_POST["anoseme"]."');";
			$rs= mysqli_query($conexion, $query);
		}	 
	}
}
echo $query;

header("Location: http://localhost/horarioscfm/create_reserva_semestral.php");

		
		die();


?>