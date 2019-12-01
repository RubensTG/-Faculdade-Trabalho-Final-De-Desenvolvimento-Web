<!DOCTYPE html>
<html>
<head>
	<title>Locação</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/locacao.css">
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="veiculos.php"><li class="aluguel">Aluguel de carros</li></a>
			<a href="historico.php"><li>Histórico</li></a>
			<a href="cadastroCliente.php"><li>Clientes</li></a>
		</ul>
	</header>
	<main>
		<form class="form">
			<div>
				<h1 class="titulo">Locação</h1>
			</div>
			<div class="label"><label>Carro</label></div>
			<div><label class="label2">Hillux</label></div>

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
			<div><label class="label2"><?php echo $valor = 1 * 12 * 2 ?></label></div>

			<div><input action type="submit" name="alugar" value="Alugar">
				<a href="veiculos.php"><button acti>Cancelar</button></a></div>
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