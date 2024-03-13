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
<h2 align="center">Ingreso de Encargados</h2>

	<ul class="list-group" align="left">
	<form action="/horarioscfm/save_encargado.php" method="POST">
	<label for="lncodigo">Docente</label>
	<li class="list-group-item">
		Nombre: <input type="text" id="lseccion" name="nombre"
		     placeholder="Nombre"> 
			 <br>
			 <br>
         Apellido: <input type="text" id="lcodigo" name="apellido"
		     placeholder="Apellido"> 
			 <br>
			 <br>
	</li>

	<br>
	<label for="lnañosem">Departamento</label>
	<li class="list-group-item">
		Departamento: <input type="text" id="lseccion" name="dept"
		     placeholder="Ing. Matemática" value="Ing. Matemática"> 
			 <br>
			 <br>
         Facultad: <input type="text" id="lcodigo" name="Facu"
		     placeholder="Cs. Físicas y Matemáticas" value="Cs. Físicas y Matemáticas"> 
			 
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