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
	$result1 = $connect->query("SELECT DISTINCT Dia FROM
	horario");
        $result2 = $connect->query("SELECT DISTINCT Nombre,Capacidad FROM
	sala");
        $result3 = $connect->query("SELECT DISTINCT Anno_Semestre FROM
	actividad");
        $result4 = $connect->query("SELECT DISTINCT Codigo, nombre
	FROM actividad");
        $result5 = $connect->query("SELECT DISTINCT Seccion FROM
	actividad");
        $result6 = $connect->query("SELECT DISTINCT Semana FROM horario");
?>
<body class="container">
	<h1 align="center">Horario Facultad de Ciencias Físicas y Matemáticas</h1>
<h2 align="center">Modificación de horario</h2>

	<ul class="list-group" align="left">
	<form action="/horarioscfm/save_reserva.php" method="POST">
    <label for="lnsala">Sala</label>
<li class="list-group-item"> <select name="nombresala">
  <option selected disabled>Sala</option>
            <?php
			while($row1=$result2->fetch_assoc())
			{
				$var = $row1['Nombre'];
				$cap =$row1['Capacidad'];
				echo "<option value='$var'>$var ($cap)</option>";
            }
			?>
    </select><br></li>

    <label for="lbloque">Horario</label>
    <li class="list-group-item"> <select name="bloque">
      <option selected disabled>Hora</option>
            <?php
			for ($i = 1; $i <= 14; $i++)
			{
                                $inicio = $i+7;
                                $fin = $i+8;
				echo "<option value='$i'>$inicio:15 - $fin:00</option>";
            }
			?>
    </select><br>

    <select name="dia">
      <option selected disabled>Día</option>
      <option value="Lunes">Lunes</option>
      <option value="Martes">Martes</option>
      <option value="Miercoles">Miércoles</option>
      <option value="Jueves">Jueves</option>
	<option value="Viernes">Viernes</option>

    </select><br>

    
    <select name="semana">
      <option selected disabled>Semana</option>
            <?php
			while($row1=$result6->fetch_assoc())
			{
				$var = $row1['Semana'];
				echo "<option value='$var'>$var</option>";
            }
			?>
    </select><br></li>
<label for="lactividad">Actividad</label>
    <li class="list-group-item">
    
    <select name="codigo">
      <option selected disabled>Código</option>
            <?php
			while($row1=$result4->fetch_assoc())
			{
				$var = $row1['Codigo'];
                                $var2 = $row1['nombre'];
				echo "<option value='$var'> ($var) $var2</option>";
            }
			?>
    </select><br>

    Sección: <input type="text" id="lseccion" name="seccion"
    placeholder="0" value="0"> <br>
    <select name="anoseme">
      <option selected disabled>Año Semestre</option>
            <?php
	$year = date("Y");
	echo "<option value=$year-1>$year-1</option>";
	  echo "<option value=$year-2>$year-2</option>";
			?>
    </select></li>
      
    <input type="submit" value="Asignar">
    </form>
    </ul>
    <center>
    <a href="/horarioscfm/index_admin.php">Ver Horarios</a>
    </center>

	

</body>
</html>