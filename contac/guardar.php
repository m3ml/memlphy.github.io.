<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','melvinmatos','Melvin15');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('id5538779_contactos');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$mensaje=$_POST['mensaje'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$email',
								   '$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>