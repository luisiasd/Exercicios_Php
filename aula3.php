
<!DOCTYPE html>
<html lang="pt">
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />								
	<title>Título da página</title>
</head>
<body>
	<section>
		<div class="container">
			<form method="POST" action="pg4.php">
				<fieldset>
					<center><h4>Teste de Votação</h4></center>
					<center><p>Digite sua idade para que possamos te posicionar sobre</br> a obrigatoriedade de votação</p></center>
					<center><h5>Ano de Nascimento</h5></center>
					<center><input type="text" name="ano" placeholder="4 digitos"></center>
					<center><input type="submit" value="verificar"></center>
					<?php
						$a = $_POST["ano"];
						$idadeAtual = date("Y") - $a;
						$anoAtual = date("Y");
						echo "<center>$anoAtual</center>";
						echo "<center>$idadeAtual anos</center>";
						
						if ($idadeAtual < 16){
							$v = "<center>Não Vota.</center>";
						}
						elseif (($idadeAtual >= 16 && $idadeAtual < 18) || ($idadeAtual > 65)){
							$v = "<center>Voto Opcional.</center>";
						}
						else{
							$v = "<center>Voto Obrigatorio</center>";
						}
						echo "<center>$v</center>";
					?>
				</fieldset>
			</form>	
			
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
