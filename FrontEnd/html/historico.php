<!DOCTYPE html>
<html>
<head>
	<title>Histórico</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/historico.css">
	<script type="text/javascript" src="../js/historic.js"></script>
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="veiculos.php"><li class="aluguel">Aluguel de carros</li></a>
			<a href="historico.php"><li id="historico">Histórico</li></a>
			<a href="clientes.html"><li class="cliente">Clientes</li></a>
		</ul>
	</header>
	<main>
		<div>
			<h1 class="historico">Histórico</h1>
		</div>
		<form method="GET" >
			<div>
				<h2><a class="voltar" href="veiculos.php">→ Voltar</a></h2>
			</div>
			<div>
				<table id="tabelahistoricos">
					<thead>
						<tr>
							<th>Carro</th>
							<th>Cliente</th>
							<th>Data Inicial</th>
							<th>Data Final</th>
						</tr>
					</thead>
					<tr>
						<td>Fusca</td>
						<td>Rubens</td>
						<td>20/11/2019</td>
						<td>30/11/2019</td>
					</tr>
					<tr> 
						<td>Hillux</td>
						<td>João</td>
						<td>19/11/2019</td>
						<td>15/12/2019</td>
					</tr>
				</table>
			</div>
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