<?php 
	include ("../Backend/conexion.php");
	include ("../Backend/validar_session.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Estilos_almacen.css">
	<link rel="stylesheet" type="text/css" href="../css/carga.css">
</head>
<body>
	<div class="content_loader">
		<div class="loader"></div>
	</div>
	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="inicio.php" class="logo"><img src="../img/logo.png"></a>
			<p class="ti">Almacen</p>
			<a href="#" class="logo_usuario"><p class="users"><?php echo $_SESSION['usuario']; ?></p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
	<main class="main">
		<div class="contenedor2">
			<div class="table">
				<div class="titulos t">Nombre</div>
				<div class="titulos n">No. inventario</div>
				<div class="titulos t">Taller</div>
				<div class="titulos l">Descripcion</div>
				<div class="titulos t">Condicion de material</div>
				<div class="titulos n">No. Disponibles</div>
				<div class="titulos t">Estatus</div>
				<div class="titulos l">Observacines</div>
				<div class="titulos agre"><a href="registrar_almacen.html"><button class="agregar">Agregar</button></a></div>
				<?php 
					$query="SELECT almacen.id,nombre,no_inventario,descripcion,condicion,observacion,cantidad,lab.taller FROM almacen, lab WHERE almacen.id_lab=lab.id";
					$resultado=mysqli_query($conexion,$query);
					while ($row=mysqli_fetch_assoc($resultado)) {
				 ?>
				<div class="contenido tc"><?php echo $row["nombre"]; ?></div>
				<div class="contenido nc"><?php echo $row["no_inventario"]; ?></div>
				<div class="contenido tc"><?php echo $row["taller"]; ?></div>
				<div class="contenido lc"><?php echo $row["descripcion"]; ?></div>
				<div class="contenido tc"><?php echo $row["condicion"]; ?></div>
				<div class="contenido nc"><?php echo $row["cantidad"]; ?></div>
				<div class="contenido tc"><?php if ($row["cantidad"]!=0) {
					echo "Disponibles";
				}else{
					echo "Ocupados";
				}?></div>
				<div class="contenido lc"><?php echo $row["observacion"]; ?></div>
				<div class="contenido modificadores">
					<form action="../Backend/eliminar_material.php" method="POST"> 
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<input type="submit" value="Eliminar" class="eliminar" onclick="return ConfirmDeleted()">
					</form>
				</div>
				<div class="contenido modificadores">
					<form action="modificar.php" method="POST"> 
						<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
						<input type="submit" value="Modificar" class="modi">
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
	<script type="text/javascript" src="../js/noti_segu.js"></script>
	<script type="text/javascript" src="../js/carga.js"></script>
</body>
</html>