<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar cliente</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cadastroCliente.css">
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="../veiculosParaAluguel/veiculos.php"><li>Aluguel de carros</li></a>
			<a href="https://www.youtube.com"><li>Histórico</li></a>
			<a href="../cadastroCliente/cadastroCliente.php"><li class="cliente">Clientes</li></a>
		</ul>
	</header>
	<main>
		<div class="div1">
			<h1 class="novoCliente">Novo Cliente</h1>
			<form class="form">
				<div>
					<label>Nome:</label>
					<input type="text" name="nome" placeholder="Nome Completo">
				</div>
				<div>
					<label>RG:</label>
					<input type="text" name="rg" placeholder="RG">
				</div>
				<div>
					<label>Celular:</label>
					<input type="text" name="celular" placeholder="XX-XXXXX-XXXX">
				</div>
				<div class="div2">
					<input type="submit" name="salvar" value="Salvar">
					<button><a href="cadastroCliente.php"> Cancelar</a></button>
				</div>
			</form>
		</div>
	</main>
	<footer><!--Este é um rodapé-->
		<pre>
			rubinhotg@live.com
			17/11/2019
			Todos os direitos reservados 
			Criado por Rubens
		</pre>
	</footer>
</body>
</html>