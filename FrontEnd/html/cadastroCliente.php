<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar cliente</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cadastroCliente.css">
	<script type="text/javascript" src="../js/cadastroCli.js"></script>
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="veiculos.php"><li>Aluguel de carros</li></a>
			<a href="historico.php"><li>Histórico</li></a>
			<a href="clientes.html"><li class="cliente">Clientes</li></a>
		</ul>
	</header>
	<main>
		<section class="sectionForm">
			<h1 class="novoCliente">Novo Cliente</h1>
			<form class="form" id="formulario" action="javascript:cadastrarCliente();">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" id="nome" placeholder="   Nome Completo">

				<label for="rg">RG:</label>
				<input type="text" name="rg" id="rg" placeholder="   RG">

				<label for="celular">Celular:</label>
				<input type="text" name="celular" id="celular" placeholder="   XX-XXXXX-XXXX">
				<div>
					<input type="submit" name="Salvar" onclick="enviar()">
					<button><a href="clientes.html"> Cancelar</a></button>
				</div>
			</form>
		</section>
	</main>
	<footer><!--Este é um rodapé-->
		<pre>
			rubinhotg@live.com
			06/12/2019
			Todos os direitos reservados 
			Criado por Rubens
		</pre>
	</footer>
</body>
</html>