<!DOCTYPE html>
<html lang="es">
<head>

	<link rel="icon" href="img/udec.ico" type="image/ico">

		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html"; charset=utf-8"/> 
		
   	<link rel = "stylesheet"
	
   			type = "text/css"
   			href = "css/bootstrap.css" /> 
   		<!-- Las lineas en la parte superior son utilizadas tanto para la estetica como para la correcta implementacion de caracteres especiales-->


	<title>Horarios CFM</title>
</head>
<body class="container">
	<h1 align="center">Horario Facultad de Ciencias Físicas y
	Matemáticas</h1>
	<center>
		<img src="img/cfmbanner.png" alt="Facultad de Ciencias Físicas y
		Matemáticas">
	</center>
	<h2 align="center">Disponibilidad de sala</h2>
	<?php
		$connect=NEW MySQLi("localhost:3306","root","","HorariosCFM");
		$connect->query("SET NAMES 'utf8'");
		$result1 = $connect->query("SELECT DISTINCT Semana FROM reserva");
		$result2 = $connect->query("SELECT DISTINCT Nombre FROM reserva");
	?>
	<center>
		<form method="post">
			<select name="sel1">
				<option selected disabled>Semana</option>
					<?php
						while($row1=$result1->fetch_assoc()){
							$var = $row1['Semana'];
							echo "<option value='$var'>$var</option>";
							}
					?>
			</select>
			<select name="sel2">
				<option selected disabled>Sala</option>
					<?php
						while($row1=$result2->fetch_assoc()){
							$var = $row1['Nombre'];
							echo "<option value='$var'>$var</option>";
						}
					?>
			</select>
			<select name="sel3">
				<option selected disabled>Semestre</option>
					<?php
						
							echo "<option value=1>1</option>";
							echo "<option value=2>2</option>";
					?>
			</select>
			<input type="submit" value="Seleccionar"/>
		</form>
		<?php
			$option =( isset($_POST['sel1']) and isset($_POST['sel2']) );
			if ($option) {
				$conexion = mysqli_connect("localhost:3306","root","","HorariosCFM");
										$year = date("Y")."-{$_POST['sel3']}";
							echo $year; 
			if ($conexion->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
			}	
			$conexion->query("SET NAMES 'utf8'");		
			if($rs= mysqli_query($conexion, "SELECT * FROM `reserva` WHERE Semana='{$_POST['sel1']}'")){			
				echo "<table class=\"table\" align='center'>";
				echo "<tr>";
				echo "<th scope=\"col\">Bloque</th>";
				echo "<th scope=\"col\">Lunes</th>";
				echo "<th scope=\"col\">Martes</th>";
				echo "<th scope=\"col\">Miercoles</th>";
				echo "<th scope=\"col\">Jueves</th>";
				echo "<th scope=\"col\">Viernes</th>";
				echo "</tr>";
				for($i=1;$i<=14;$i++){
					echo "<tr><td>".$i."</td>";
					$lunes=mysqli_query($conexion, "SELECT actividad.nombre,actividad.Codigo FROM reserva,actividad WHERE reserva.Codigo=actividad.Codigo AND reserva.Semestre='$year' AND reserva.Semana='{$_POST['sel1']}' AND reserva.Dia='Lunes' AND reserva.Nombre='{$_POST['sel2']}' AND reserva.Bloque='$i'");
					if(mysqli_num_rows($lunes) > 0){
						while($row = mysqli_fetch_array($lunes)){
							echo "<td>({$row['Codigo']})-{$row['nombre']}</td>";							
						}
					}else{
						echo "<td>" .' '. "</td>";	
					}
					$ma=mysqli_query($conexion, "SELECT actividad.nombre,actividad.Codigo FROM reserva,actividad WHERE reserva.Codigo=actividad.Codigo  AND reserva.Semestre='$year' AND reserva.Semana='{$_POST['sel1']}' AND reserva.Dia='Martes' AND reserva.Nombre='{$_POST['sel2']}' AND reserva.Bloque='$i'");
					if(mysqli_num_rows($ma) > 0){
						while($row = mysqli_fetch_array($ma)){
							echo "<td>({$row['Codigo']})-{$row['nombre']}</td>";							
						}
					}else{
						echo "<td>" .' '. "</td>";	
					}
					$mi=mysqli_query($conexion, "SELECT actividad.nombre,actividad.Codigo FROM reserva,actividad WHERE reserva.Codigo=actividad.Codigo  AND reserva.Semestre='$year' AND reserva.Semana='{$_POST['sel1']}' AND reserva.Dia='Miercoles' AND reserva.Nombre='{$_POST['sel2']}' AND reserva.Bloque='$i'");
					if(mysqli_num_rows($mi) > 0){
						while($row = mysqli_fetch_array($mi)){
							echo "<td>({$row['Codigo']})-{$row['nombre']}</td>";						
						}
					}else{
						echo "<td>" .' '. "</td>";	
					}
					$j=mysqli_query($conexion, "SELECT actividad.nombre,actividad.Codigo FROM reserva,actividad WHERE reserva.Codigo=actividad.Codigo AND reserva.Semestre='$year' AND reserva.Semana='{$_POST['sel1']}' AND reserva.Dia='Jueves' AND reserva.Nombre='{$_POST['sel2']}' AND reserva.Bloque='$i'");
					if(mysqli_num_rows($j) > 0){
						while($row = mysqli_fetch_array($j)){
							echo "<td>({$row['Codigo']})-{$row['nombre']}</td>";					
						}
					}else{
						echo "<td>" .' '. "</td>";	
					}
					$v=mysqli_query($conexion, "SELECT actividad.nombre,actividad.Codigo FROM reserva,actividad WHERE reserva.Codigo=actividad.Codigo AND reserva.Semestre='$year' AND reserva.Semana='{$_POST['sel1']}' AND reserva.Dia='Viernes' AND reserva.Nombre='{$_POST['sel2']}' AND reserva.Bloque='$i'");
					if(mysqli_num_rows($v) > 0){
						while($row = mysqli_fetch_array($v)){
							echo "<td>({$row['Codigo']})-{$row['nombre']}</td>";							
						}
					}else{
						echo "<td>" .' '. "</td>";	
					}		
				}
				echo "</table>";
			}
		else echo "no se realizó la conexion";
	} else {
		echo "Debe seleccionar Semana, Sala y Semestre";
	}
	?>
	<br>
				<br>
				<br>
	<input type="button" value="Ingresar" onclick="location='login.php'" />
	<br>
	</center>
</body>
</html>