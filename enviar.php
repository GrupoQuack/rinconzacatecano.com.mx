<?php


$correos='enrique.administracion@rinconzacatecano.com.mx,noelbasurto9@gmail.com';
//$correos='basurtoomar@gmail.com';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['telefono'];
$subject = $_POST['asunto'];
$mensaje = $_POST['mensajes'];
$thank="gracias.html";

if(is_null($nombre) || $nombre == ""){
	echo "El parametro nombre va vacio" ;
}elseif(is_null($tel) || $tel == ""){
	echo "El parametro telefono va vacio" ;
}elseif (is_null($correo) || $correo == "") {
	echo "El parametro correo va vacio";
}elseif(is_null($subject) || $subject == "") {
	echo "El parametro Tema va vacio";
}elseif(is_null($mensaje) || $mensaje == "") {
	echo "El parametro mensaje va vacio";
}
else
{

	$message = '


	<html> 
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	
	   <title>GEOyGEO</title> 
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" type="text/css">
	   <style>
	   .tex
	   {
	font-family: "Open Sans Condensed", sans-serif;
	color:#06F;
	   }

	   </style>
	</head> 
	<body> 
	<p align="center"><img src="" ></p> 
	<h1 style="color:#06F;" class="tex">Rincon Zacatecano</h1> 
	<p> 
	<b style="color:#06F;" class="tex">Buen dia tienes un correo electrónico de rinconzacatecano.com.mx</b>. </p>
	<p style="color:#06F;" class="tex">Los Datos del Contacto Aparecen en seguida contactalo.. </p>
	<table width="200"  align="center" class="tex" >	 	  
	  <tr>
	    <td>Nombre:</td>
	    <td>'.$nombre.'</td>
	  </tr>
	  <tr>
	    <td>Correo:</td>
	    <td>'.$correo.'</td>
	  </tr>
	   <tr>
	    <td>Telefono:</td>
	    <td>'.$tel.'</td>
	  </tr>
	  <tr>
	    <td>Tema:</td>
	    <td>'.$subject.'</td>
	  </tr>
	  <tr>
	    <td valign="top">Mensaje:</td>
	    <td>'.$mensaje.'</td>
	  </tr>
	</table>
	<p style="color:#06F;" class="tex">Saludos estamos a tus Ordenes para cualquier aclaración o duda.</p>
	<hr>

	<p align="center" class="tex">Información enviada a travez de <a href="http://www.grupoquack.com.mx" target="_blank">Grupo Quack Design and System</a></p> 
	</body> 
	</html>  
	';

	//para el envío en formato HTML 
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

	//dirección del remitente 
	$headers .= "From: RinconZ-k-t-k-no  <info@rinconzacatecano.com.mx> \r\n"; 

	mail($correos,$subject,$message, $headers);

	Header ("Location: $thank");
	
	  
}



?> 

