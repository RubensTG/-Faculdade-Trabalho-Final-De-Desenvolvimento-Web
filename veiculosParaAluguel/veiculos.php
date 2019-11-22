<!DOCTYPE html>
<html>
<head>
	<title>Veiculos</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="veiculos.css">
</head>
<body>
	<header id="cabecalho">
		<h1 class="locadora">LOCADORA TG</h1>
		<ul class="abas">
			<a href="veiculos.php"><li class="aluguel">Aluguel de carros</li></a>
			<a href="../historico/historico.php"><li>Histórico</li></a>
			<a href="../cadastroCliente/cadastroCliente.php"><li class="cliente">Clientes</li></a>
		</ul>
	</header>
	<main>
		<div>
			<h1 class="veiculos">Veiculos</h1>
		</div>
		<form action=" " method="post">
			<label for="busca">Buscar</label>
			<div class="container">  
				<input type="search" id="busca" name="search">
				<button type="submit">Procurar</button>
			</div>
			<div>
				<h2><a class="cadastrar" href="../cadastroCarro/cadastroCarro.php">→ Cadastrar novo veículo</a></h2>
			</div>
			<div>
				<table border="3">
					<thead>
						<tr>
							<th>Placa</th><!-- Cabeçalho da tabela com letras em negrito -->
							<th>Modelo</th>
							<th>Cor</th>
							<th>Ano</th>
							<th>Tipo</th>
							<th>Valor do aluguel</th>
							<th>Foto</th>
							<th>Disponibilidade</th>
						</tr>
					</thead>
					<tr> <!-- Define uma linha -->
						<td><a href="../cadastroCarro/cadastroCarro.php"> xpc-2144</a></td><!-- Cabeçalho da tabela com letras normal -->
						<td>Hillux</td>
						<td>Preto</td>
						<td>2019</td>
						<td>Popular</td>
						<td>200</td>
						<td>imagem</td>
						<td><a href="../locacao/locacao.php">Sim</a></td>
					</tr>
					<tr> 
						<td><a href="../cadastroCarro/cadastroCarro.php">gap-6387</a></td>
						<td>Fusca</td>
						<td>azul</td>
						<td>2000</td>
						<td>popular</td>
						<td>50</td>
						<td>foto</td>
						<td><a href="../devolucao/devolucao.php">Não</a></td>
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