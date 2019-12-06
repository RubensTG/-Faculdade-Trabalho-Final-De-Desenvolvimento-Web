<!DOCTYPE html>
<html>
<head>
	<title>Devolução</title>
	<html lang="pt-br">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/devolucao.css">
	<script type="text/javascript" src="../js/devo.js"></script>
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
		<form class="form" action="javascript:devolver();">
			<div>
				<h1 class="titulo">Devolução</h1>
			</div>
			<div class="label"><label>Carro:</label></div>
			<div><label class="label2">Hillux</label></div>

			<div class="label"><label>Veiculo pego em:</label></div>
			<div><label class="label2">06/12/2019</label></div>

			<div class="label"><label>Valor da diária:</label></div>
			<div><label class="label2">R$: 100,00</label></div>

			<div class="label"><label>Cliente:</label></div>
			<div><label class="label2">Rubens</label></div>

			<div class="label"><label>Data prevista para devolução:</label></div>
			<div><label class="label2">10/12/2019</label></div>

			<div class="label"><label>Valor total do aluguel:</label></div>
			<div><label class="label2">R$: 100,00</label></div>

			<div class="label"><label>Quilometragem devolvida:</label></div>
			<div><input type="text" name="quilometragemDevolvidade" placeholder="13.000"></div>

			<div class="label"><label>Devolvido em:</label></div>
			<div><label class="label2"><?php echo $data = date('d-m-Y') ?></label></div>
			

			<div><input type="submit" name="alugar" value="Devolver" onclick="devolver()">
				<button><a href="veiculos.php">Cancelar</a></button></div>
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