<?php 
	include 'conexion.php';
	$id=$_POST["id"];
	$query="DELETE FROM registro_prestamo WHERE id='$id'";
	$resultado=mysqli_query($conexion,$query);
	if ($resultado) {
		?>
			<script type="text/javascript">
				alert("Se elimino con exito");
				window.location.href='../frontend/almacen.php';
			</script>
		<?php
	}else{
		?>
			<script type="text/javascript">
				alert("Error");
				window.location.href='../frontend/almacen.php';
			</script>
		<?php
	}
 ?>