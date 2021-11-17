<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 &&
		strlen($_POST['codPostal']) >= 1 && strlen($_POST['correo']) >= 1 &&
		strlen($_POST['contraseña']) >= 1) {
	    $nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$codPostal = trim($_POST['codPostal']);
	    $correo = trim($_POST['correo']);
		$contraseña = trim($_POST['contraseña']);
	    $consulta = "INSERT INTO usuario(nombre, apellido, codigo_postal, correo, contraseña) VALUES ('$nombre', '$apellido', '$codPostal', '$correo', '$contraseña')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>