<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Carros</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cadastroCarro.css">
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
		<div class="div1">
			<h1 class="novoVeiculo">Cadastrar novo veículo</h1>
			<form class="form">
				<div>
					<label>Placa:</label>
					<input type="text" name="placa" placeholder="123-abcd">
				</div>
				<div>
					<label>Modelo:</label>
					<input type="text" name="modelo" placeholder="gol">
				</div>
				<div>
					<label>Cor:</label>
					<input type="text" name="cor" placeholder="Preto">
				</div>
				<div>
					<label>Ano:</label>
					<input type="text" name="ano" placeholder="2019">
				</div>
				<div>
					<label>Tipo:</label>
					<select name="tipo">
						<option value="luxo" selected>Luxo</option> 
						<option value="popular">Popular</option>
						<option value="utilitario" selected>Utilitário</option> 
						<option value="esportivo">Esportivo</option>
					</select>
				</div>
				<div>
					<label>Quilometragem:</label>
					<input type="text" name="quilometragem" placeholder="12.000">
				</div>
				<div>
					<label>Valor da diaria:</label>
					<input type="text" name="valordadiaria" placeholder="R$ 100,00">
				</div>
				<div>
					<label>Foto:</label>
					<input type="file" name="foto">
				</div>
				<div class="div2">
					<input type="submit" name="Salvar">
					<button><a href="../veiculosParaAluguel/veiculos.php"> Cancelar</a></button>
				</div>
			</form>
		</div>
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