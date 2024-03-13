<?php

		
		$conexion = mysqli_connect("localhost:3306","root","","HorariosCFM");
		if ($conexion->connect_error) {
	    		die("Connection failed: " . $conn->connect_error);
		}


echo $query;
        $cuerpo ="Se ha se ha solicitado una reserva de la sala ".$_POST["nombresala"]." para el dia ".$_POST["dia"]." en el bloque ".$_POST["bloque"]." para la seccion ".$_POST["seccion"]." del curso ".$_POST["codigo"].". \r\n
         \r\n
         Mensaje generado automatico, por favor no responder.";
        $cuerpo = wordwrap($cuerpo, 70, "\r\n"); // Ajuste correo a 70 caracteres por linea
        //para el envío en formato HTML
        $headers  = 'MIME-Version: 1.0\r\n';
        $headers .= 'Content-type: text/html; charset=iso-8859-1\r\n';
        //dirección del remitente
        $nombre = 'Administracion horarios CFM';
        $emisor = 'horarios.cfm.udec@gmail.com';
        $asunto = 'Reserva de horario';
        //$headers .= "From: ".$_POST['nombre']." <".$_POST['emisor'].">\r\n";
        $headers .= 'From: {$emisor}\r\n';
        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        //$headers .= "Reply-To: ".$_POST['emisor']."\r\n";
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";
        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        $receptor = 'bducumets@udec.cl';
        if(mail($receptor,$asunto,$cuerpo,$headers)){
    		echo "<script>alert('Funcion \"mail()\" ejecutada, por favor verifique su bandeja de correo.');</script>";
    	}else{
    		echo "<script>alert('No se pudo enviar el mail, por favor verifique su configuracion de correo SMTP saliente.');</script>";
    	}


$rs= mysqli_query($conexion, $query);
header("Location: http://localhost/horarioscfm/solicitar_reserva.php");

		
		die();
?>
