function enviar(){
	window.location='veiculos.php';
}
function situacao(){
	return'<input type="button" value="Alugado" onclick="enviar()"></input>',
	'<input type="button" value="Alugado" onclick="enviar()"></input>'
}

window.onload = function(e) {fetch('http://localhost/TrabalhoFinal/PhpBackEnd/carro', {
}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(carro => {  
			var table = document.getElementById("tabelaCarros");
			var row = table.insertRow(-1);
			var placaColuna = row.insertCell(0);/**Cria o campo na tabela */
			var modeloColuna = row.insertCell(1); 
			var corColuna = row.insertCell(2); 
			var anoColuna = row.insertCell(3);
			var tipoColuna = row.insertCell(4);
			var valordadiariaColuna = row.insertCell(5);
			var fotoColuna = row.insertCell(6);
			var situacaoColuna = row.insertCell(7);
			placaColuna.innerHTML = carro.placa;/**busca dado para a tabela */
			modeloColuna.innerHTML = carro.modelo;
			corColuna.innerHTML = carro.cor;
			anoColuna.innerHTML = carro.ano;
			tipoColuna.innerHTML = carro.tipo;
			valordadiariaColuna.innerHTML = carro.valordadiaria;
			fotoColuna.innerHTML = carro.foto;
			situacaoColuna.innerHTML = situacao();


		})
	}).catch(error => console.error(error))
}

function cadastrarCarro(){
	var form = document.getElementById("formularioCarro");
	var data = {};
	data['placa'] = form.placa.value 
	data['modelo'] = form.modelo.value;
	data['cor'] = form.cor.value;
	data['ano'] = form.ano.value 
	data['tipo'] = form.tipo.value;
	data['quilometragem'] = form.quilometragem.value;
	data['valordadiaria'] = form.valordadiaria.value 
	data['foto'] = form.foto.value;	

	console.log(JSON.stringify(data));
	fetch('http://localhost/TrabalhoFinal/PhpBackEnd/carro', {
		method: 'POST',       
		body: JSON.stringify(data)
	})
	.then((response) => {
		if (response.ok) {
			return response.json() 
		} else {
			return Promise.reject({ status: res.status, statusText: res.statusText });
		}   

	})
	.then((data) => console.log(data))
	.catch(err => console.log('Error message:', err.statusText));
}