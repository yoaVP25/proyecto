<?php 
	include ("../Backend/conexion.php");
	include ("../Backend/validar_session.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Estilos_alumnos.css">
	<link rel="stylesheet" type="text/css" href="../css/carga.css">
</head>
<body>
	<div class="content_loader">
		<div class="loader"></div>
	</div>
	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="inicio.php" class="logo"><img src="../img/logo.png"></a>
			<p class="ti">Maestros</p>
			<a href="#" class="logo_usuario"><p class="users">Daniel</p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
	<main class="main">
		<div class="contenedor2">
			<div class="table">
				<div class="titulos">Nombre</div>
				<div class="titulos">Apellidos</div>
				<div class="titulos c">Correo</div>
				<div class="titulos">Matricula</div>
				<div class="titulos agre">Operacion</div>
				<?php 
					$query="SELECT nombre,apellido,usuario,matricula FROM usuarios WHERE id_rol=1";
					$resultado=mysqli_query($conexion,$query);
					while ($row=mysqli_fetch_assoc($resultado)) {
				 ?>
				<div class="contenido"><?php echo $row["nombre"]; ?></div>
				<div class="contenido"><?php echo $row["apellido"]; ?></div>
				<div class="contenido cc"><?php echo $row["usuario"]; ?></div>
				<div class="contenido"><?php echo $row["matricula"]; ?></div>
				<div class="contenido modificadores"><a href=""><button class="eliminar" >Eliminar</button></a></div>
				<div class="contenido modificadores"><a href=""><button class="modi">Modificar</button></a></div>
				<?php } ?>
			</div>
		</div>
	</main>
	<footer class="footer">
		<div class="contenedor">
			
		</div>
	</footer>
	<script type="text/javascript" src="../js/carga.js"></script>
</body>
</html>