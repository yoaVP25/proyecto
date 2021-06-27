<?php 
    include ("../Backend/conexion.php");
	include ("../Backend/validar_session.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Material prestado</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Estilos_material_prestado.css">
	<link rel="stylesheet" type="text/css" href="../css/carga.css">
</head>
<body>
	<div class="content_loader">
		<div class="loader"></div>
	</div>
	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="inicio.php" class="logo"><img src="../img/logo.png"></a>
			<p class="ti">Material prestado</p>
			<a href="../Backend/cerrar_session.php" class="logo_usuario"><p class="users"><?php echo $_SESSION['usuario']; ?></p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
	<main class="main">
		<div class="contenedor2">
			<div class="table">
				<div class="titulos">Nombre</div>
				<div class="titulos">Apellidos</div>
				<div class="titulos l">Correo</div>
				<div class="titulos">Matricula</div>
				<div class="titulos">Fecha de prestamo</div>
				<div class="titulos">Fecha de entrega</div>
				<div class="titulos">Hora de prestamo</div>
				<div class="titulos">Nombre de material</div>
				<div class="titulos">cantidad</div>
				<div class="titulos agre">Operacion</div>
				<?php 
					$query="SELECT * FROM registro_prestamo";
					$resultado=mysqli_query($conexion,$query);
					while ($row=mysqli_fetch_assoc($resultado)) {
				 ?>
				<div class="contenido "><?php echo $row["nom_usuario"]; ?></div>
				<div class="contenido "><?php echo $row["ape_usuario"]; ?></div>
				<div class="contenido c"><?php echo $row["usu_usuario"]; ?></div>
				<div class="contenido "><?php echo $row["matricula_usu"]; ?></div>
				<div class="contenido "><?php echo $row["fecha"]; ?></div>
				<div class="contenido "><?php echo $row["fecha_entrega"]; ?></div>
				<div class="contenido"><?php echo $row["hora"]; ?></div>
				<div class="contenido "><?php echo $row["nombre_material"]; ?></div>
				<div class="contenido "><?php echo $row["cantidad"]; ?></div>
				<div class="contenido modificadores">
					<form action="../Backend/elimirar_registro_material_prestado.php" method="POST"> 
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<input type="submit" value="Eliminar" class="eliminar">
					</form>
				</div>
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