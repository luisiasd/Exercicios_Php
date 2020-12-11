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
												<h6>exercicios</h6>
												<a href="index.php">0</a>
												<a href="aula1.php">1</a>
												<a href="aula2.php">2</a>
												<a href="aula3.html">3</a>
												<a href="aula4.html">4</a>												
								</div>
						</div>						
		</section>
</body>
</html>
