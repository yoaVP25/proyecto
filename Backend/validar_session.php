<?php 
	session_start();
	$session=$_SESSION['usuario'];
	$rol=$_SESSION['rol'];
	if ($session==null||$session=='') {
		?>
			<script type="text/javascript">
				window.location.href='../index.html';
			</script>
		<?php
	}
	if ($rol!=1) {	
			?>
				<script type="text/javascript">
					window.location.href='../index.html';
				</script>
			<?php
		}
 ?>