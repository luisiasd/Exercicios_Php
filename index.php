<!DOCTYPE html>
<html lang="pt">
<head>
				<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />				
				<title>Título da página</title>

</head>
<body>
		<section>
						<div class="container">
								<h1>Exercicio_1</h1>
								<?php
								$idade  = 675;
								$nome = "Luis Eduardo ";
								echo "Nome: $nome Idade: $idade";
								
					     echo "<h1>Exercicio_2</h1>";
								
								$preco = $_GET["p"];
								echo"Preço do Produto R$: $preco";
								$precoAumento  += ($precoAumento * 10/100);
								$precoDesconto -= ($precoDesconto * 1/100);
								echo "</br> Preço com 10% de Auemnto: $precoAumento";
								echo "</br> Preço com 10% de Desconto: $precoDesconto";
								
								echo "<h1>Operadores Relacionais_03</h1>";
								echo "Diferente: < > </br> Igual: = = </br> Idêntico: = = =</br> And: && </br> or: ||";
								echo "<h6>Exemplo</h6>";
								echo "a > b ? a : b </br>";
								$a = 50;
								$b = 30;
								$maior = $a >= $b ? $a : $b;
								echo "Resultado: $maior";								
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
