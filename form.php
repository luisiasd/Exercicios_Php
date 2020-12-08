<!DOCTYPE html>
<html lang="pt">
<head>
				<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />				
				<title>Título da página</title>

</head>
<body>
		<section>
						<div class="container">
								<h1>Dados do Formulario</h1>
								<?php
								$nome           = $_POST["nome"];
								$sobrenome      = $_POST["sobrenome"];
								$sexo           = $_POST["sexo"];
								$dataNascimento = $_POST["dataNascimento"];
								$senha          = $_POST["senha"];
								echo "$nome $sobrenome $sexo $dataNascimento $senha";
								?>
								<h1>Estilização de Texto</h1>
								<?php
								$texto   = $_POST["t"]   ? $_POST["t"]   : "Vazio";
								$tamanho = $_POST["tam"] ? $_POST["tam"] : "Vazio";
								$cor     = $_POST["cor"] ? $_POST["cor"] : "Vazaio";
								?>
								<?php 
								echo "<span class='texto'>$texto</span>";
								?>
								<div class="container2">
												<h6><a href="pg2.php">2</a></h6>
												<h6><a href="pg3.php">3</a></h6>
								</div>
						</div>
		</section>
</body>
</html>
