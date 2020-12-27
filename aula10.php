<!DOCTYPE html>
<html lang="pt">
<head>
	<title>exercicio 10</title>
</head>
<body>
	<pre>
		<?php
    	require_once 'aula10_1.php';
    	$p1 = new contaBanco();
			$p1->abrirConta("CC");
			$p1->setNumConta(123456);
			$p1->setDono("Luis Eduardo");
			$p1->depositar(200);
			$p1->depositar(200);
			$p1->sacar(60);
			$p1->pagarMensal();
			$p1->setStatus(false);
			
			
			
			$p2 = new contaBanco();
			$p2->abrirConta("CP");
			$p2->setDono("Marcos Aurelio");
			$p2->setNumConta("2222");
			$p2->depositar(2500);
			
			print_r($p1);
			print_r($p2);
		?>
	</pre>
</body>
</html>
