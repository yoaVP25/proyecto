<?php 
    include ("../Backend/conexion.php");
	include ("../Backend/validar_session_alumno.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Historial</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Estilos_historial.css">
	<link rel="stylesheet" type="text/css" href="../css/carga.css">
</head>
<body>
	<div class="content_loader">
		<div class="loader"></div>
	</div>
	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="inicio_alumnos.php" class="logo"><img src="../img/logo.png"></a>
			<a href="../Backend/cerrar_session.php" class="logo_usuario"><p class="users"><?php echo $_SESSION['usuario']; ?></p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
	<main class="main">
		<div class="contenedor2">
			<div class="table">
				<div class="titulos ">Matricula</div>
				<div class="titulos n">Nombre material</div>
				<div class="titulos ">Cantidad</div>
				<div class="titulos ">Fecha de prestamo</div>
				<div class="titulos ">Fecha de entrega</div>
				<div class="titulos ">Hora</div>
				<?php 
					$matricula=$_SESSION["matricula"];
					$query="SELECT matricula_usu,fecha,fecha_entrega,hora,nombre_material,cantidad FROM registro_prestamo WHERE matricula_usu='$matricula'";
					$resultado=mysqli_query($conexion,$query);
					while ($row=mysqli_fetch_assoc($resultado)) {
				 ?>
				<div class="contenido "><?php echo $row["matricula_usu"]; ?></div>
				<div class="contenido c"><?php echo $row["nombre_material"]; ?></div>
				<div class="contenido "><?php echo $row["cantidad"]; ?></div>
				<div class="contenido "><?php echo $row["fecha"]; ?></div>
				<div class="contenido "><?php echo $row["fecha_entrega"]; ?></div>
				<div class="contenido "><?php echo $row["hora"]; ?></div>
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