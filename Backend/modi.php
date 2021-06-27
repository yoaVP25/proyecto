<?php 
	include 'conexion.php';
	$id_almacen=$_POST['id'];
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
		$query="UPDATE almacen SET almacen.nombre='$nombre', almacen.no_invetario='$noI', almacen.descripcion='$descripcion', almacen.condicion='$condicion', almacen.observacion='$observacion', almacen.cantidad='$cantidad', almacen.status='$status', almacen.taller='$taller' WHERE almacen.id='$id_almacen'";
		$resultado=mysqli_query($conexion,$query);
		if ($resultado) {
			?>
				<script type="text/javascript">
					alert("Se actualizo con exito");
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