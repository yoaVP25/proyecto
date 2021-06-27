<?php 
	include 'conexion.php';
	$nombre=$_POST['nombre'];
	$noI=$_POST['no_invetario'];
	$descripcion=$_POST['descripcion'];
	$condicion=$_POST['condicion'];
	$cantidad=$_POST['cantidad'];
	$taller=$_POST["select"];
	$observacion=$_POST["observacion"];
	if ($observacion==null||$observacion=='') {
		$observacion="Ninguna";
	}
	if ($cantidad>=0) {
		if ($cantidad!=0) {
			$status="Disponible";
		}else{
			$status="Ocupado";
		}
		$query = "INSERT INTO almacen (nombre,no_inventario,descripcion,condicion,observacion,cantidad,status,id_lab) VALUES ('$nombre', '$noI', '$descripcion', '$condicion','$observacion', '$cantidad', '$status', '$taller')";
		$resultado=mysqli_query($conexion,$query);
		if ($resultado) {
			?>
				<script type="text/javascript">
					alert("registro con exito");
					window.location.href='../frontend/almacen.php';
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("error");
					//window.location.href='../frontend/registrar_almacen.html';
				</script>
			<?php
		}
	}else{
		?>
		<script type="text/javascript">
			alert("No se aceptan numeros negativos");
			window.location.href='../frontend/registrar_almacen.html';
		</script>
<?php
	}
 ?>