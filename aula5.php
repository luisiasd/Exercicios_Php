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
												<h1>Comando Function</h1>
												<center><h6><a href="aula5.html">Visualizar Codigo</a></h6></center>
												<?php
												
												function soma ($a, $z){
																$b = $a + $z;
																echo "Resultado da soma, $b</br>";
																return $b;
												}
												soma (10, 20);
												$j = 20;
												$k = 30;
												soma ($j, $k);
												?>
												
												<h4>Soma de valores</h4>
												<p>Insira valores no campo para somar.</p>
												<?php
												$valores = $_POST["somasValores"];
												function somas() {
																$p = func_get_args();
																$t = func_num_args();
																$s = 0;
																for ($i=0; $i < $t; $i++) {
																				$s += $p[$i];
																}
																return $s;
												}	
												$r = somas($somaValores);
												echo "soma dos valores $r";
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
