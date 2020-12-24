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
								
								$c1 = new Caneta();
								$c1->setModelo($ModeloCaneta);
								$c1->setPonta($PontaCaneta);
								print "Eu enho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
				?>
				</pre>
</body>
</html>
