<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Usuario</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellidos">
		<input type="text" name="codPostal" placeholder="Código Postal">
    	<input type="email" name="correo" placeholder="Correo electrónico">
    	<input type="password" name="contraseña" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("usuario.php");
        ?>
</body>
</html>