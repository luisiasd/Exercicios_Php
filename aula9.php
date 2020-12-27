<!DOCTYPE html>
<html lang="pt">
<head>
				<title>Pagina 09</title>
</head>
<body>
				<pre>
				<form method="POST">
								<input type="text" name="modelo" placeholder="modelo">
								<input type="text" name="ponta" placeholder="ponta">
								<input type="submit" value="enviar">
				</form>
				
				<?php
								require_once 'aula9_1.php';
							  $ModeloCaneta = $_POST["modelo"];
								$PontaCaneta = $_POST["ponta"];								
								
								$c1 = new Caneta("Fabber Casttel", "Verde", "0.5" );
								$c2 = new Caneta("$ModeloCaneta", "$PontaCaneta", "$PontaCaneta");
								//$c1->setModelo($ModeloCaneta);
								//$c1->setPonta($PontaCaneta);
								//print "Eu enho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
								
								print_r($c1);
								print_r($c2);
				?>
				</pre>
</body>
</html>
