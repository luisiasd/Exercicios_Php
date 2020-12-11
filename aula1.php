<!DOCTYPE html>
<html lang="pt">
<head>
				<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />				
				<title>Título da página</title>

</head>
<body>
		<section>
						<div class="container">
								<h1>cod. Votação</h1>
								<?php
								$ano   = $_GET["idade"];
								$idade = 2020 - $ano;
								echo "Quem nasceu em $ano tem $idade";
								$tipo = ($idade >= 18 && $idade <= 65) ? "<h5>Obrigatorio!</h5>" : "Não Obrigatorio!";
								echo " e dessa forma seu voto é $tipo";
								?>

				<div class="rodape">
								<h6>Paginas</h6>
								<a href="index.php">inicio</a>
								<a href="pg2.php">2</a>
								<a href="pg3.php">3</a>
								<a href="pg4.html">4</a>
				</div>
						</div>						
		</section>
</body>
</html>
