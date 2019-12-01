window.onload = function(e) {
	fetch(
		'http://localhost/TrabalhoFinal/BackEnd/model/Conexao.php', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(cliente => {  
			var table = document.getElementById("tabeladedados");
			var row = table.insertRow(-1);
			var idColuna = row.insertCell(0);
			var nomeColuna = row.insertCell(1); 
			var rgColuna = row.insertCell(2); 
			var celularColuna = row.insertCell(3);  
			idColuna.innerHTML = cliente.id;
			nomeColuna.innerHTML = cliente.nome;
			rgColuna.innerHTML = cliente.rg;

		})
	}).catch(error => console.error(error))
}

function enviarForm() {
	var form = document.getElementById('adicionarCliente');
	var data = {};
	data['nome'] = form.nome.value 
	data['rg'] = form.rg.value;
	data['celular'] = form.celular.value;

	// console.log(JSON.stringify(data));
	fetch('http://localhost/TrabalhoFinal/BackEnd/model/Conexao.php', {
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
