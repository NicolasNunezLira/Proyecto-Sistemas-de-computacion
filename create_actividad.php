<!DOCTYPE html>
<html lang="es">
<head>
<link rel="icon" href="img/udec.ico" type="image/ico">
	<meta charset="UTF-8">
	 <link rel = "stylesheet"
   			type = "text/css"
href = "styles.css" />
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8"/> 
	 <!-- <link rel = "stylesheet"
   			type = "text/css"
   			href = "styles.css" /> --> 
   			<!-- El codigo de arriba incluye un archivo css que definen uds, en este caso está en esta carpeta y se llama styles.css -->
   	<link rel = "stylesheet"
   			type = "text/css"
   			href = "css/bootstrap.css" /> 
   			<!-- esto incluye bootstrap , es un conjunto de estilos pero para utilizarlo deben hacer que sus elementos html tengan clases, busquen la documentación -->
   	

	<title>Horarios CFM</title>
</head>

<?php
	$connect=NEW MySQLi("localhost:3306","root","","HorariosCFM");
	$connect->query("SET NAMES 'utf8'");
	$result1 = $connect->query("SELECT DISTINCT nombre,apellido,id FROM
	encargado");
?>
<body class="container">
	<h1 align="center">Horario Facultad de Ciencias Físicas y Matemáticas</h1>
<h2 align="center">Ingreso de Asignaturas</h2>

	<ul class="list-group" align="left">
	<form action="/horarioscfm/save_actividad.php" method="POST">
	<label for="lncodigo">Codigo</label>
	<li class="list-group-item">
		Nombre: <input type="text" id="lseccion" name="nombre"
		     placeholder="Nombre"> 
			 <br>
			 <br>
         Codigo: <input type="text" id="lcodigo" name="codigo"
		     placeholder="500000"> 
		Sección: <input type="text" id="lseccion" name="seccion"
		     placeholder="0" value="0"> 
		N° de Participantes: <input type="text" id="lseccion" name="NP"
		placeholder="0" value="0"> 
	</li>
	<br>
    <label for="lnnombre">Nombre de encargado</label>
	<li class="list-group-item">
    <select name="id">
      <option selected disabled>Nombre de Encargado</option>
            <?php
	
			while($row1=$result1->fetch_assoc())
			{
				$var = $row1['nombre'];
				$var1=$row1['apellido'];
				$var2=$row1['id'];
				echo "<option value='$var2'> $var $var1 </option>";
            }
			?>
    </select></li>

	<br>
	<label for="lnañosem">Periodo</label>
	<li class="list-group-item">
		Año: <input type="text" id="lseccion" name="año"
		     placeholder="2019" value="2019"> 
			 <br>
			 <br>
         Semestre: <input type="text" id="lcodigo" name="semestre"
		     placeholder="1" value="1"> 
			 
	</li>
	<br>
    <input type="submit" value="Asignar">
    </form>
    </ul>
	
    <center>
    <a href="/horarioscfm/index.php">Ver Horarios</a>
    </center>

	

</body>
</html>