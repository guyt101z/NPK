<!DOCTYPE>

<html>

<head>
	<title>NPK</title>
	<link type="text/css" href="css/style.css" rel="stylesheet"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.each($('.btns'), function(i, v){
				$(v).click(function(){
					window.location.href = 'index.php?page=' + v.id;
				})
			})
			$('#indi').click(function(){
				window.location.href = 'index.php';
			});
		});
	</script>
</head>

<body>
	<div id="contenido">
		<div id="logo"></div>
		<div id="botonera">
			<div id="productos" class="btns"></div>
			<div id="Info" class="btns"></div>
			<div id="galeria" class="btns"></div>
			<div id="crear" class="btns"></div>
			<div id="contacto" class="btns"></div>
		</div>
	</div>

		<div id="indi"></div>
		<?php 			
			if(!isset($_GET['page'])){

			}else{
				$page = $_GET['page'];
				$path = $page . '.php';
				include($path);
			}
		?>
	</div>
</body>

</html>