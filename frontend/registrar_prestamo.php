<?php 
	$cantidad=$_POST['cantidad'];
	$id_almacen=$_POST['id'];
	if ($cantidad<=0) {
		?>
			<script type="text/javascript">
				alert("No hay stock");
				window.location.href='../frontend/inicio_alu.php';
			</script>
		<?php
	}
 ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
  	<title>Prestamo</title>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Input Animation | CodingNepal</title> -->
    <link rel="stylesheet" href="../css/Estilos_registrar_prestamo.css">
    <link rel="stylesheet" type="text/css" href="../css/carga.css">
  </head>
  <body>
  	<div class="content_loader">
		<div class="loader"></div>
	</div>
  	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="#" class="logo"><img src="../img/logo.png"></a>
			<p class="ti">Registrar Prestamo</p>
			<a href="#" class="logo_usuario"><p class="users">Daniel</p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
  	<form action="../Backend/registrar_prestamo.php" method="POST">
  		<div class="wrapper">
	     	<div class="input-data">
		        <input id="fecha" class="input" type="date" name="fecha" placeholder=" " required>
		        <div class="underline">
				</div>
				<label>Fecha de entrega</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="number" name="cantidad" required>
		        <div class="underline">
				</div>
				<label>cantidad</label>
	      	</div>
	      	<input type="hidden" name="cantidad_existente" value="<?php echo $cantidad ?>">
	      	<input type="hidden" name="id" value="<?php echo $id_almacen ?>">
	      	<!--
	      	<div class="title">Seleccione una opcion</div>
			    <div class="box">
			      <input type="radio" name="select" id="option-1">
			      <input type="radio" name="select" id="option-2">
			      <label for="option-1" class="option-1">
			        <div class="dot"></div>
			        <div class="text">Lab. Quimica</div>
			      </label>
			      <label for="option-2" class="option-2">
			        <div class="dot"></div>
			        <div class="text">Frutas y hortalizas</div>
			      </label>
			    </div>
	      	<div class="input-data">
		        <input class="input" type="text" name="descripcion" required>
		        <div class="underline">
				</div>
				<label>Descripcion</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="text" name="cantidad" required>
		        <div class="underline">
				</div>
				<label>Cantidad</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="text" name="condicion" required>
		        <div class="underline">
				</div>
				<label>Condiciones de material</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="text" name="condicion" required>
		        <div class="underline">
				</div>
				<label>Observacion</label>
	      	</div>-->
	      	<button type="submit" class="boton">Agregar</button>
		</div>
  	</form>
  <script type="text/javascript" src="../js/pla.js"></script>
  <script type="text/javascript" src="../js/carga.js"></script>
</body>
</html>