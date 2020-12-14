<!DOCTYPE html>
<html lang="pt">
<head>
				<meta charset="utf-8">
				<title>Título da página</title>
				<link rel="stylesheet" type="text/css" href="estilo.css" media="screen">
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>				
</head>
<body>
				<section>
								<div class="container">
												<form method="POST" action="aula4.php">
																<h1>Calculadora</h1>
																<input type="text" name="numero" placeholder="valor">
																<input type="text" name="numero1" placeholder="valor">
																<fieldset><legend>Operação</legend>
																				<input type="radio" name="operacao" value="1" id="adicao" checked>
																				<label for="adicao">Adição</label>
																				<input type="radio" name="operacao" value="2" id="subtracao">
																				<label type="subtracao">Subtração</label>
																				<input type="radio" name="operacao" value="3" id="multiplicacao">
																				<label type="multiplicacao">multiplicação</label>
																</fieldset>
																<input type="submit" class="botao" value="calcular">
												</form>
																								
												<?php
												$num = isset($_POST["numero"]) ? $_POST["numero"]:0;
												$num1 = isset($_POST["numero1"]) ? $_POST["numero1"]:0;												
												$res = isset($_POST["operacao"]) ? $_POST["operacao"]:1;
												
												switch ($res){
																case 1:/* Adição */
																				$r = $num + $num1;
																				break;
																case 2:/* Subtração */
																				$r = $num - $num1;
																				break;
																case 3:/* Multiplicação */
																				$r = $num * $num1;
												}
												echo "$r";
												?>
												
												<h1>To-do Today</h1>
												<form method="POST" action="aula4.php">
																<input type="number" name="diaSemana" placeholder="1° - 7°" min="1" max="7" required="">
																
																<input type="submit" value="analisar">																				
												</form>												
												<?php
																$d = isset($_POST["diaSemana"]) ? $_POST["diaSemana"]:1;
																
																switch ($d){
																				case 2:
																				case 3:
																				case 4:
																				case 5:
																				case 6:
																								echo "Sit on the chair end go study!";
																								break;
																				case 7:
																				case 1:
																								echo "Keep study!";
																								break;
																				default:
																								echo "Error 404!";
																				
																}
												?>												
												
								<div class="rodape">
												<h6>exercicios</h6>
												<a href="index.php">0</a>
												<a href="aula1.php">1</a>
												<a href="aula2.php">2</a>
												<a href="aula3.html">3</a>
												<a href="aula4.html">4</a>
												<a href="aula5.html">5</a>
												<a href="aula6.html">6</a>
								</div>
								</div>
				</section>				
</body>
</html>
