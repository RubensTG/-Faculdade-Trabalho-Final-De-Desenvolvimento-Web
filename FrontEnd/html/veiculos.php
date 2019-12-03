<!DOCTYPE html>
<html>
<head>
	<title>Veiculos</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/veiculos.css">
	<script type="text/javascript" src="../js/cadastroCarro.js"></script>
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="veiculos.php"><li class="aluguel">Aluguel de carros</li></a>
			<a href="historico.php"><li>Histórico</li></a>
			<a href="clientes.html"><li class="cliente">Clientes</li></a>
		</ul>
	</header>
	<main>
		<div>
			<h1 class="veiculos">Veiculos</h1>
		</div>
		<form action=" " method="GET">
			<label for="busca">Buscar</label>
			<div class="container">  
				<input type="search" id="busca" name="search">
				<button type="submit">Procurar</button>
			</div>
			<div>
				<h2><a class="cadastrar" href="cadastroCarro.php">→ Cadastrar novo veículo</a></h2>
			</div>
			<div>
				<table id="tabelaCarros">
					<thead>
						<tr>
							<th>Placa</th><!-- Cabeçalho da tabela com letras em negrito -->
							<th>Modelo</th>
							<th>Cor</th>
							<th>Ano</th>
							<th>Tipo</th>
							<th>Valor do aluguel</th>
							<th>Foto</th>
							<th>Situação</th>
						</tr>
					</thead>
					<tr> <!-- Define uma linha -->
						<td><a href="cadastroCarro.php"> xpc-2144</a></td><!-- Cabeçalho da tabela com letras normal -->
						<td>Hillux</td>
						<td>Preto</td>
						<td>2019</td>
						<td>Popular</td>
						<td>200</td>
						<td>imagem</td>
						<td><a href="locacao.php">Disponivel</a></td>
					</tr>
					<tr> 
						<td><a href="cadastroCarro.php">gap-6387</a></td>
						<td>Fusca</td>
						<td>azul</td>
						<td>2000</td>
						<td>popular</td>
						<td>50</td>
						<td>foto</td>
						<td><a href="devolucao.php">Alugado</a></td>
					</tr>
				</table>
			</div>
		</form>
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