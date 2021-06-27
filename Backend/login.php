<?php
session_start();
	include 'conexion.php';
	$usuario=$_POST['usuario'];
	$password=$_POST['password'];
	$query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
	$resultado=mysqli_query($conexion,$query);
	$row=mysqli_fetch_array($resultado);
	$count=mysqli_num_rows($resultado);
	if ($count!=0) {
		$_SESSION["rol"]=$row[6];
		$_SESSION["usuario"]=$row[1];
		$_SESSION["id"]=$row[0];
		$_SESSION["matricula"]=$row[4];

		if ($row[6]==1) {
			?>
			<script type="text/javascript">
				window.location.href='../frontend/inicio.php';
			</script>
		<?php
		}elseif ($row[6]==2) {
			?>
			<script type="text/javascript">
				window.location.href='../frontend/inicio_alumnos.php';
			</script>
		<?php
		}else{
			?>
			<script type="text/javascript">
				alert("Error");
				window.location.href='../index.html';
			</script>
		<?php
		}
	}else{
		?>
			<script type="text/javascript">
				alert("Usuario o Contraseña son incorrectas");
				window.location.href='../index.html';
			</script>
		<?php
	}
?>