window.onload = function(e) {
	fetch('http://localhost/TrabalhoFinal/PhpBackEnd/historico', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(historico => {  
			var table = document.getElementById("tabelahistoricos");
			var row = table.insertRow(-1);
			var carroColuna = row.insertCell(0);/**Cria o campo na tabela */
			var clienteColuna = row.insertCell(1); 
			var datainicialColuna = row.insertCell(2); 
			var datainicialColuna = row.insertCell(3); 
			carroColuna.innerHTML = historico.carro;/**busca dado para a tabela */
			clienteColuna.innerHTML = historico.cliente;
			datainicialColuna.innerHTML = historico.datainicial;
			datafinalColuna.innerHTML = historico.datafinal;
		})
	}).catch(error => console.error(error))
}
