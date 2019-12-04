function enviar(){
	window.location='clientes.html';
}
window.onload = function(e) {
	fetch('http://localhost/TrabalhoFinal/PhpBackEnd/cliente', {		
		}).then(response => response.json())				
	.then(data => { 
		console.log(data);
		data.forEach(cliente => {  
			var table = document.getElementById("tabelaClientes");
			var row = table.insertRow(-1);
			var nomeColuna = row.insertCell(0);/**Cria o campo na tabela */
			var rgColuna = row.insertCell(1); 
			var celularColuna = row.insertCell(2); 
			nomeColuna.innerHTML = cliente.nome;/**busca dado para a tabela */
			rgColuna.innerHTML = cliente.rg;
			celularColuna.innerHTML = cliente.celular;
		})
	}).catch(error => console.error(error))
}

function cadastrarCliente(){
	var form = document.getElementById("formulario");
	var data = {};
	data['nome'] = form.nome.value 
	data['rg'] = form.rg.value;
	data['celular'] = form.celular.value;

	console.log(JSON.stringify(data));
	fetch('http://localhost/TrabalhoFinal/PhpBackEnd/cliente', {
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
function atualizarCliente($id){
	var form = document.getElementById("formulario");
	var data = {};
	data['nome'] = form.nome.value 
	data['rg'] = form.rg.value;
	data['celular'] = form.celular.value;

	console.log(JSON.stringify(data));
	fetch('http://localhost/TrabalhoFinal/PhpBackEnd/cliente', {
		method: 'UPDATE',       
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
