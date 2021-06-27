<?php
	include 'conexion.php';
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['usuario'];
	$matricula=$_POST['matricula'];
	$password=$_POST['password'];
	$rol=$_POST['rol'];
	
	if (buscarrepetido($usuario,$conexion)==1) {
		?>
			<script type="text/javascript">
				alert("El correo ya existe, Intenta con otro");
				window.location.href='../frontend/registrar.html';
			</script>
		<?php
	}elseif (buscarrepetidoma($matricula,$conexion)==1) {
		?>
			<script type="text/javascript">
				alert("La matricula ya existe intenta con otro");
				window.location.href='../frontend/registrar.html';
			</script>
		<?php
	}else{
		$query = "INSERT INTO usuarios (nombre,apellido,usuario,matricula,password,id_rol) VALUES ('$nombre', '$apellido', '$usuario', '$matricula', '$password', '$rol')";
		$resultado=mysqli_query($conexion,$query);
		if ($resultado) {
			?>
				<script type="text/javascript">
					alert("registro con exito");
					window.location.href='../index.html';
				</script>
			<?php

		}else{
			?>
				<script type="text/javascript">
					alert("Error");
					window.location.href='../frontend/registrar.html';
				</script>
			<?php
		}
	}
	function buscarrepetido($usuario,$conexion){
		$sql="SELECT * FROM usuarios WHERE usuario='$usuario'";
		$resultado=mysqli_query($conexion,$sql);
		if (mysqli_num_rows($resultado)) {
			return 1;
		}else{
			return 0;
		}
	}
	function buscarrepetidoma($matricula,$conexion){
		$sql="SELECT * FROM usuarios WHERE matricula='$matricula'";
		$resultado=mysqli_query($conexion,$sql);
		if (mysqli_num_rows($resultado)) {
			return 1;
		}else{
			return 0;
		}
	}
?>