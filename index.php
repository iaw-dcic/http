<?php 
	$cantidad = 0;
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
		$cantidad = $_POST["cantidad"];
	else if ($_SERVER['REQUEST_METHOD'] == 'GET')
		$cantidad = $_GET["cantidad"];
	else {
		echo 'HTTP REQUEST: '.$_SERVER['REQUEST_METHOD']."\n";
		die();
	}
?>

<html>
	<head>
		<title>Ejemplo HTTP</title>
		<link rel="stylesheet" href="estilo.css">
		<link href="./favicon.ico" rel="shortcut icon" type="image/x-icon">
		<script type="text/javascript" language="javascript" src="javascript.js"></script>
	</head>

	<body>
		<form method="post" action="./">
			<label for="cantidad">Cantidad de Imagenes</label>
			<input type="number" min="1" max="8" name="cantidad" type="text" 
				<?php if (isset($_POST["cantidad"])) echo "autofocus value='".$_POST["cantidad"]."'";?> />
			<button>por POST</button>
		</form>
		<form method="get" action="./">	
			<label for="cantidad">Cantidad de Imagenes</label>
			<input type="number" min="1" max="8" name="cantidad" type="text" autofocus 
				<?php if (isset($_GET["cantidad"])) echo "autofocus value='".$_GET["cantidad"]."'";?> />
			<button>por GET</button>
		</form>
		<div>
		<?php
			for ($i = 1; $i <= $cantidad; $i++) {
				echo "			<img src='imagen$i.jpg'/>\n";
			}
		?>
		</div>
	</body>
</html>
