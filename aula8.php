<!DOCTYPE html>
<html lang="pt">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>exercicio_07</title>
</head>
<body>
				<form method="POST" action="CanetaDois.php">
								<input type="text" name="modelo1"></br>
								<input type="submit" value="Enviar">
				</form>
				<pre>
				<?php
								require_once 'CanetaDois.php';
								$c1 = new Caneta;
								$c1->modeleo = "bic cristal";
								$c1->cor = "green";
								$c1->rabiscar();
								$c1->tampar();
								$c1->destampar();
								
								print_r($c1);
								
															
				?>
				</pre>
</body>
</html>
