<!DOCTYPE html>
<html lang="pt">
	<head>
		<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
		<title>#2</title>
	</head>
<body>
	<section>
		<div class="container">
			<h1>Integração Html5 + PHP</h1>
			<form method="POST" action="form.php">	
				<fieldset>
					<input type="text" name="name" placeholder="nome"></br>
					<input type="sobrenome" name="sobrenome" placeholder="sobrenome"></br>
					<input type="radio" name="sexo" id="masc" value="masculino">
					<label for="masc">Masculino</label></br>
					<input type="radio" name="sexo" id="fem" value="feminino">
                                        <label for="fem">Feminino</label></br>
					<input type="text" name="dataNascimento" placeholder="Data de Nascimento"></br>				<input type="password" name="senha" placeholder="senha"></br>				<input type="submit" value="Enviar">
				</fieldset>
			</form>
			<form method="POST" action="form.php">
				<input type="text" name="t" id="itxt" placeholder="Texto"></br>
				<label for="itam">Tamanho</label>
				<select name="tam" id="itam">
					<option value="10pt">10</option>
					<option value="14pt">14</option>
					<option value="20pt">20</option>
				</select></br>
				<label for="icor">Cor:</label>
				<input type="color" name="cor" id="icor"></br>
				<input type="submit" value="Pronto">
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
