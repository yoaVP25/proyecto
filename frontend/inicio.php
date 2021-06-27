<?php 
	include ("../Backend/validar_session.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="../css/Estilos_inicio.css">
	<link rel="stylesheet" type="text/css" href="../css/carga.css">
</head>
<body>
	<div class="content_loader">
		<div class="loader"></div>
	</div>
	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="#" class="logo"><img src="../img/logo.png"></a>
			<a href="../Backend/cerrar_session.php" class="logo_usuario"><p class="users"><?php echo $_SESSION['usuario']; ?></p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
	<main class="main">
		<div class="contenedor2">
			<h1>Procal</h1>
			<div><a href="almacen.php"><img src="../img/img5.png"><p>Almacen</p></a></div>
			<div><a href="alumnos.php"><img src="../img/img6.png"><p>Alumnos</p></a></div>
			<div><a href="maestros.php"><img src="../img/img8.png"><p>Maestros</p></a></div>
			<div><a href="#"><img src="../img/img4.png"><p>Mantenimiento</p></a></div>
			<div><a href="material_prestado.php"><img src="../img/img9.png"><p>Material prestado</p></a></div>
		</div>
	</main>
	<footer class="footer">
		<div class="contenedor">
			
		</div>
	</footer>
	<script type="text/javascript" src="../js/carga.js"></script>
</body>
</html>