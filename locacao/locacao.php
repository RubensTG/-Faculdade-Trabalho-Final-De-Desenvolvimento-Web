<!DOCTYPE html>
<html>
<head>
	<title>Locação</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="locacao.css">
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="../veiculosParaAluguel/veiculos.php"><li class="aluguel">Aluguel de carros</li></a>
			<a href="../historico/historico.php"><li>Histórico</li></a>
			<a href="../cadastroCliente/cadastroCliente.php"><li>Clientes</li></a>
		</ul>
	</header>
	<main>
		<form class="form">
			<div>
				<h1 class="titulo">Locação</h1>
			</div>
			<div class="label"><label>Carro</label></div>
			<div><label class="variavel"><span>Hillux</span></label></div>

			<div class="label"><label>Veiculo pego em</label></div>
			<div><input type="text" name="dataInicial" placeholder="01/01/1900"></div>

			<div class="label"><label>Valor da diária</label></div>
			<div><input type="text" name="valorDiaria" placeholder="R$200,00"></div>

			<div class="label"><label>Cliente</label></div>
			<select>
				<option value="name" selected>Rubens</option> 
				<option value="name">João</option>
			</select>

			<div class="label"><label>Data prevista para devolução</label></div>
			<div><input type="text" name="dataFinalPrevista" placeholder="01/01/1900"></div>

			<div class="label"><label>Valor total do aluguel</label></div>
			<div><label class="variavel"><?php echo $valor = 1 * 12 * 2 ?></label></div>

			<div><input type="submit" name="alugar" value="Alugar">
				<button><a href="../veiculosParaAluguel/veiculos.php">Cancelar</a></button></div>
			</form>
		</main>
		<footer><!--Este é um rodapé-->
			<pre>
				rubinhotg@live.com
				21/11/2019
				Todos os direitos reservados 
				Criado por Rubens
			</pre>
		</footer>
	</body>
	</html>