<!DOCTYPE html>
<html lang="pt">
<head>
				<meta charset="utf-8">
				<title>Título da página</title>
				<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>
<body>
				<section>
								<div class="container">
															<?php
															$listat = $_POST["telefonica"];
															?>
															<center><h4>Usando Print_r</h4></center>
															<?php
															print_r($listat);
															?>
															<center><h4>Usando var_dump</h4></center>
															<center><p>Função que apresenta não só os elementos como também</br> os tipos dos elementos</p></center>
															<?php
															var_dump($listat);
															?>
															<center><h4>array_push</h4></center>
															<center><p>Inserindo elemento no final do vetor</p></center>
															<?php
															array_push($listat, "Fulano", "(62) 85454-4545");
															print_r($listat);
															?>
															<center><h4>array_unshift</h4></center>
															<center><p>Inserindo elemento no inicio do vetor</p></center>
															<?php
															array_unshift($listat, "inicio", "12356");
															print_r($listat);
															?>
															<center><p>Eliminando elemento do final.</p></center>
															<?php
															array_pop($listat);
															print_r($listat);
															?>
															<center><p>Eliminando elemento do inicio.</p></center>
															<?php
															array_shift($listat);
															print_r($listat);
															?>

				<div class="rodape">
						<h6>exercicios</h6>
							<a href="index.php">0</a>
							<a href="aula1.php">1</a>
							<a href="aula2.php">2</a>
							<a href="aula3.html">3</a>
							<a href="aula4.html">4<a>
							<a href="aula5.html">5</a>
							<a href="aula6.html">6</a>							
				</div>																								
								</div>
				</section>				
</body>
</html>
