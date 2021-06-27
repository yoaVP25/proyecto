<?php
	include ("validar_session_alumno.php");
	include ("conexion.php");
	$id=$_SESSION["id"];
	$fecha=$_POST['fecha']; 
	$cantidad=$_POST['cantidad'];
	$id_almacen=$_POST['id'];
	$cantidad_existente=$_POST['cantidad_existente'];
	date_default_timezone_set("America/Mexico_City");
	$date=date('Y-m-d');
	$time=date('g:y a');
	$query="SELECT * FROM usuarios WHERE id='$id'";
	$resultado=mysqli_query($conexion,$query);
	$filas=mysqli_fetch_array($resultado);
	$nom_usu=$filas[1];
	$ape_usu=$filas[2];
	$usu_usuario=$filas[3];
	$matricula_usu=$filas[4];
	$fecha_limt=date("Y-m-d",strtotime($date."+ 30 days")); 
	if ($fecha>=$date) {
		if ($fecha_limt>=$fecha) {
			if ($cantidad<0) {
				echo "no se aceptan numeros negativos";
			}elseif ($cantidad==0) {
				echo "no puedes pedir 0 maeriales";
			}else{
				if ($cantidad<=$cantidad_existente) {
						$can=$cantidad_existente-$cantidad;
						$consul="SELECT * FROM almacen WHERE id='$id_almacen'";
						$r=mysqli_query($conexion,$consul);
						$fi=mysqli_fetch_array($r);
						$nombre_material=$fi[1];
						$qry="UPDATE almacen SET cantidad='$can' WHERE id='$id_almacen'";
						$resul=mysqli_query($conexion,$qry);
						if ($resul) {
							$sql="INSERT INTO registro_prestamo(nom_usuario,ape_usuario,usu_usuario,matricula_usu,fecha,fecha_entrega,hora,nombre_material,cantidad) VALUES('$nom_usu','$ape_usu','$usu_usuario','$matricula_usu','$date','$fecha','$time','$nombre_material','$cantidad')";
							$q=mysqli_query($conexion,$sql);
							if ($q) {
								echo "funciono";
								?>
									<script type="text/javascript">
										window.location.href='../frontend/inicio_alu.php';
									</script>
								<?php

							}else{
								?>
									<script type="text/javascript">
										alert("Error");
										window.location.href='../frontend/registrar_prestamo.php';
									</script>
								<?php
							}
						}else{
							?>
								<script type="text/javascript">
									alert("Se produjo un error");
									window.location.href='../frontend/registrar_prestamo.php';
								</script>
							<?php
						}
					}else{
						?>
								<script type="text/javascript">
									alert("Error la cantidad supera al existente");
									window.location.href='../frontend/registrar_prestamo.php';
								</script>
						<?php
					}
				}
		}else{
			?>
				<script type="text/javascript">
					alert("No es posible prestar el material por mas de 30 dias");
					window.location.href='../frontend/registrar_prestamo.php';
				</script>
			<?php
		}
	}else{
		?>
			<script type="text/javascript">
				alert("no se puede asignar fechas pasadas");
				window.location.href='../frontend/registrar_prestamo.php';
			</script>
		<?php
	}
 ?>