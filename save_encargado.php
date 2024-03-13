
<?php

		
		$conexion = mysqli_connect("localhost:3306","root","","HorariosCFM");
		if ($conexion->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
		}
			 $result2 = $conexion->query("SELECT DISTINCT id FROM
				encargado");
					$conexion->query("SET NAMES 'utf8'");
	$hola="0000";
	while($row1=$result2->fetch_assoc()){
		if((int)$row1["id"]>(int)$hola){
			$hola=$row1["id"];
		}
	}
	 $hola=(int)$hola+1;
	 $hola=strval($hola);
	 while(strlen($hola)<4){
		$hola="0".$hola;
	 }
		if(!empty($_POST["nombre"])and!empty($_POST["apellido"])and!empty($_POST["dept"]and!empty($_POST["Facu"]))){
		$query="insert into
		encargado (Nombre,Apellido,Departamento,Facultado,id)
		values ('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["dept"]."','".$_POST["Facu"]."','$hola');";
		}
echo $query;



$rs= mysqli_query($conexion, $query);
header("Location: http://localhost/horarioscfm/create_encargado.php");

		
		die();
?>