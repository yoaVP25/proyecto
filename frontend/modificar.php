<?php 
	include ("../Backend/conexion.php");
	$id=$_POST["id"];
	$query="SELECT * FROM almacen WHERE id='$id'";
	$resultado=mysqli_query($conexion,$query);
	$row=mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Input Animation | CodingNepal</title> -->
    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" type="text/css" href="../css/carga.css">
  </head>
  <body>
  	<div class="content_loader">
		<div class="loader"></div>
	</div>
  	<header class="header">
		<div class="contenedor logo-contenedor">
			<a href="#" class="logo"><img src="../img/logo.png"></a>
			<p class="ti">Modificar almacen</p>
			<a href="#" class="logo_usuario"><p class="users">Daniel</p><img src="../img/usuario_logo.png"></a>
		</div>
	</header>
  	<form action="../Backend/modi.php" method="POST">
  		<div class="wrapper">
	     	<div class="input-data">
		        <input class="input" type="text" name="nombre" value="<?php echo $row[1]?>"  required>
		        <div class="underline">
				</div>
				<label>Nombre</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="number" name="no_invetario" value="<?php echo $row[2]?>" required>
		        <div class="underline">
				</div>
				<label>No. inventario</label>
	      	</div>
	      	<div class="title">Seleccione una opcion</div>
			    <div class="box">
			      <input type="radio" name="select" value="1" id="option-1">
			      <input type="radio" name="select" value="2" id="option-2">
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
		        <input class="input" type="text" name="descripcion" value="<?php echo $row[3]?>" required>
		        <div class="underline">
				</div>
				<label>Descripcion</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="text" name="cantidad" value="<?php echo $row[6]?>" required>
		        <div class="underline">
				</div>
				<label>Cantidad</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="text" name="condicion" value="<?php echo $row[4]?>" required>
		        <div class="underline">
				</div>
				<label>Condiciones de material</label>
	      	</div>
	      	<div class="input-data">
		        <input class="input" type="text" name="observacion" value="<?php echo $row[7]?>" required>
		        <div class="underline">
				</div>
				<label>Observacion</label>
	      	</div>
	      	<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
	      	<button type="submit" class="boton">Agregar</button>
		</div>
  	</form>
  <script type="text/javascript" src="../js/carga.js"></script>
</body>
</html>