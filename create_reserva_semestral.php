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
        $result2 = $connect->query("SELECT DISTINCT Nombre, Capacidad FROM
	sala");
	 $result4 = $connect->query("SELECT DISTINCT Codigo, nombre
	FROM actividad");
	$result = $result2->fetch_all(MYSQLI_ASSOC);
?>
<body class="container">
	<h1 align="center">Horario Facultad de Ciencias Físicas y Matemáticas</h1>
<h2 align="center">Modificación de horario</h2>

	<ul class="list-group" align="left">
	<form action="/horarioscfm/save_reserva_semestral.php" method="POST">
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
		    <label for="lnsala">Bloque 1</label>
<li class="list-group-item">
Lunes: <select name="check_list1[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list1[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list1[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list1[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list1[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
			    <label for="lnsala">Bloque 2</label>
<li class="list-group-item">
Lunes: <select name="check_list2[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list2[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list2[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list2[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list2[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	    <label for="lnsala">Bloque 3</label>
<li class="list-group-item">
Lunes: <select name="check_list3[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list3[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list3[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list3[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list3[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
		    <label for="lnsala">Bloque 4</label>
<li class="list-group-item">
Lunes: <select name="check_list4[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list4[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list4[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list4[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list4[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
		    <label for="lnsala">Bloque 5</label>
<li class="list-group-item">
Lunes: <select name="check_list5[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list5[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list5[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list5[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list5[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
		    <label for="lnsala">Bloque 6</label>
<li class="list-group-item">
Lunes: <select name="check_list6[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list6[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list6[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list6[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list6[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	    <label for="lnsala">Bloque 7</label>
<li class="list-group-item">
Lunes: <select name="check_list7[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list7[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list7[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list7[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list7[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
		    <label for="lnsala">Bloque 8</label>
<li class="list-group-item">
Lunes: <select name="check_list8[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list8[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list8[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list8[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list8[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	



	    <label for="lnsala">Bloque 9</label>
<li class="list-group-item">
Lunes: <select name="check_list9[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list9[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list9[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list9[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list9[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	



	    <label for="lnsala">Bloque 10</label>
<li class="list-group-item">
Lunes: <select name="check_list10[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list10[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list10[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list10[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list10[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	



	    <label for="lnsala">Bloque 11</label>
<li class="list-group-item">
Lunes: <select name="check_list11[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list11[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list11[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list11[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list11[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	



	    <label for="lnsala">Bloque 12</label>
<li class="list-group-item">
Lunes: <select name="check_list12[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list12[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list12[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list12[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list12[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	



	    <label for="lnsala">Bloque 13</label>
<li class="list-group-item">
Lunes: <select name="check_list13[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list13[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list13[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list13[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list13[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
	



	    <label for="lnsala">Bloque 14</label>
<li class="list-group-item">
Lunes: <select name="check_list14[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Lunes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	Martes: <select name="check_list14[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Martes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Miercoles: <select name="check_list14[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Miercoles";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Jueves: <select name="check_list14[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Jueves";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	Viernes: <select name="check_list14[]">
  <option selected disabled> </option>
            <?php
			foreach($result as $row1)
			{
				$var = $row1['Nombre'];
				$realvar=$var.";Viernes";
				$cap=$row1['Capacidad'];
				echo "<option value='$realvar'>$var ($cap)</option>";
            }
			?>
    </select>
	
	
	</li>
    <input type="submit" name="submit" Value="Asignar"/>
    </form>
	
	

    </ul>
    <center>
    <a href="/horarioscfm/index_admin.php">Ver Horarios</a>
    </center>
	
	

</body>
</html>