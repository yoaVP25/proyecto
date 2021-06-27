<?php 
	include 'conexion.php';
	$usuario=$_POST["usuario"];
	$password=$_POST["password"];
	$query="SELECT * FROM usuarios WHERE usuario='$usuario'";
	$resultado=mysqli_query($conexion,$query);
	$row=mysqli_fetch_array($resultado);
	if ($row[4]==$password) {
		?>
		<script type="text/javascript">
			alert("la contraseña ya esta en uso");
			window.location.href='../frontend/Olvidar_password.html';
		</script>
		<?php
	}else{
		$qry="UPDATE usuarios SET password='$password'";
		$resul=mysqli_query($conexion,$qry);
		if ($resul) {
			?>
				<script type="text/javascript">
					alert("perra");
					//window.location.href='../index.html';
				</script>
			<?php
		}else{
			?>
				<script type="text/javascript">
					alert("Se produjo un error");
					//window.location.href='../frontend/Olvidar_password.html';
				</script>
			<?php
		}
	}
 ?>