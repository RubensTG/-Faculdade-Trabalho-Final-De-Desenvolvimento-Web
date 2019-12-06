<!DOCTYPE html>
<html>
<head>
	<title>Locação</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/locacao.css">
	<script type="text/javascript" src="../js/loca.js"></script>
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="veiculos.php"><li class="aluguel">Aluguel de carros</li></a>
			<a href="historico.php"><li>Histórico</li></a>
			<a href="clientes.html"><li>Clientes</li></a>
		</ul>
	</header>
	<main>
		<form class="form" action="javascript:alugar();">
			<div>
				<h1 class="titulo">Locação</h1>
			</div>
			<div class="label"><label>Carro:</label></div>
			<div><label class="label2">Hillux</label></div>

			<div class="label"><label>Veiculo pego em:</label></div>
			<div><label class="label2"><?php echo $data = date('d-m-Y') ?></label></div>

			<div class="label"><label>Valor da diária:</label></div>
			<div><label class="label2">R$: 100,00</label></div>

			<div class="label"><label>Cliente:</label></div>
			<select>
				<option value="name" selected>Rubens</option> 
				<option value="name">João</option>
			</select>

			<div class="label"><label id="data">Data prevista para devolução</label></div>
			<div><input type="text" name="dataFinalPrevista" placeholder="01/01/1900"></div>

			<div class="label"><label>Valor total do aluguel</label></div>
			<div><label class="label2">R$: 400,00</label></div>

			<div>
				<input type="submit" value="Alugar" onclick="alugar()">
				<a href="veiculos.php"><button>Cancelar</button></a></div>
			</form>
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